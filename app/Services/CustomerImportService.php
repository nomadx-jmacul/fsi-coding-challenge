<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerCredential;
use App\Models\CustomerIdentification;
use App\Models\CustomerPicture;

class CustomerImportService
{
    /**
     * @var string|\Illuminate\Config\Repository|\Illuminate\Foundation\Application|mixed|object|null
     */
    protected string $url;

    /**
     * @var array|\Illuminate\Config\Repository|\Illuminate\Foundation\Application|mixed|object|null
     */
    protected array $urlParams;

    public function __construct()
    {
        $this->url = config('api.user_import.url');
        $this->urlParams = config('api.user_import.params');
    }

    /**
     * @throws \Exception
     */
    public function import(): void
    {
        try {
            $users = $this->fetchUsers();
            if (!empty($users)) {
                foreach ($users['results'] as $user) {
                    $personalInfo = $this->getMappedData($user, 'random_user', 'personal_info');
                    $customer = Customer::updateOrCreate(
                        ['email' => $personalInfo['email']],
                        $personalInfo
                    );

                    if ($customer['id']) {
                        $customerAddress = $this->getMappedData($user, 'random_user', 'address');
                        CustomerAddress::updateOrCreate(
                            ['customer_id' => $customer['id']],
                            array_merge(['customer_id' => $customer['id']], $customerAddress)
                        );

                        $customerCredential = $this->getMappedData($user, 'random_user', 'credential');
                        CustomerCredential::updateOrCreate(
                            ['customer_id' => $customer['id']],
                            array_merge(['customer_id' => $customer['id']], $customerCredential)
                        );

                        $customerIdentification = $this->getMappedData($user, 'random_user', 'identification');
                        CustomerIdentification::updateOrCreate(
                            ['customer_id' => $customer['id']],
                            array_merge(['customer_id' => $customer['id']], $customerIdentification)
                        );

                        $customerPicture = $this->getMappedData($user, 'random_user', 'picture');
                        CustomerPicture::updateOrCreate(
                            ['customer_id' => $customer['id']],
                            array_merge(['customer_id' => $customer['id']], $customerPicture)
                        );
                    }
                }
            }
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    private function fetchUsers()
    {
        $response = Http::get($this->url, $this->urlParams);
        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Fetching of customer data failed: ' . $response->body());
    }

    /**
     * @param array $userData
     * @param string $apiName
     * @param string $property
     * @return array
     */
    private function getMappedData(array $userData, string $mapperType, string $property): array
    {
        $mappedConfigs = config('mapper.' . $mapperType . '.' . $property);
        $mappedData = [];

        if (!empty($mappedConfigs)) {
            $fieldValue = '';
            foreach ($mappedConfigs as $field => $value) {
                $fieldValue = $userData;
                $keys = explode(':', $value);
                foreach ($keys as $index => $key) {
                    $fieldValue = $fieldValue[$key];
                }

                $mappedData[$field] = $fieldValue;
            }
        }

        return $mappedData;
    }
}
