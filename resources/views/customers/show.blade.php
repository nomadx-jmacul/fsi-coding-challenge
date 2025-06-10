@extends('layouts.app')

@section('title', $customer->title)

@section('content')
    <div class="container mx-auto p-4">

        <h1 class="text-4xl font-bold mb-4">
            <div class="w-40 h-40"><img class="rounded-full" src="{{ $customer->picture->large  }}" width="120" height="120" alt="Alex Shatov"></div>
            {{ $customer->title }} {{ $customer->firstname }} {{ $customer->lastname }}
        </h1>

        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-green-600 bg-gray-50">
            <tr>
                <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Personal Info</div>
                </th>
            </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-gray-500">
                        Email: {{ $customer->email }}<br/>
                        Birthdate: {{ $customer->birthdate }}<br/>
                        Age: {{ $customer->age }}<br/>
                        Telephone No: {{ $customer->telephone_no }}<br/>
                        Cellular No: {{ $customer->cellular_no }}<br/>
                        Nationality: {{ $customer->nationality }}<br/>
                        Registration Date: {{ $customer->registration_date }}<br/>
                        Registration Age: {{ $customer->registration_age }}<br/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-green-600 bg-gray-50">
            <tr>
                <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Address</div>
                </th>
            </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-gray-500">
                        Street No: {{ $customer->address->street_no }}<br/>
                        Street Name: {{ $customer->address->street_name }}<br/>
                        City: {{ $customer->address->city }}<br/>
                        State: {{ $customer->address->state }}<br/>
                        Country: {{ $customer->address->country }}<br/>
                        Postal Code: {{ $customer->address->postcode }}<br/>
                        Latitude: {{ $customer->address->latitude }}<br/>
                        Longitude: {{ $customer->address->longitude }}<br/>
                        Timezone Offset: {{ $customer->address->timezone_offset }}<br/>
                        Timezone Description: {{ $customer->address->timezone_description }}<br/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-green-600 bg-gray-50">
            <tr>
                <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Credentials</div>
                </th>
            </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-gray-500">
                        User Unique ID: {{ $customer->credential->uuid }}<br/>
                        Username: {{ $customer->credential->username }}<br/>
                        Password: {{ $customer->credential->password }}<br/>
                        Salt: {{ $customer->credential->salt }}<br/>
                        MD5: {{ $customer->credential->md5 }}<br/>
                        SHA1: {{ $customer->credential->sha1 }}<br/>
                        SHA256: {{ $customer->credential->sha256 }}<br/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-green-600 bg-gray-50">
            <tr>
                <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Identifications</div>
                </th>
            </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-gray-500">
                        Name: {{ $customer->identification->name }}<br/>
                        Value: {{ $customer->identification->value }}<br/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-green-600 bg-gray-50">
            <tr>
                <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Pictures</div>
                </th>
            </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-gray-500">
                        Large: {{ $customer->picture->large }}<br/>
                        Medium: {{ $customer->picture->medium }}<br/>
                        Thumbnail: {{ $customer->picture->thumbnail }}<br/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <a href="{{ route('customers.index') }}" class="text-left text-gray-800 hover:underline p-10 pl-5">
        &larr; Back to customers list
    </a>
@endsection
