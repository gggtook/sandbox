@extends('layouts.app')

@section('title', $user->name)

@section('content')
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <tbody>
            <tr>
                <th scope="col" class="px-6 py-3 w-1/5 text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    ユーザID
                </th>
                <td class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    {{ $user->id }}
                </td>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-3 text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    名前
                </th>
                <td class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    {{ $user->name }}
                </td>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-3 text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    年齢
                </th>
                <td class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    {{ $user->profile->age }}&nbsp歳
                </td>
            </tr>
        </tbody>
    </table>
    <table class="my-10 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <tbody>
            @foreach($user->messages as $message)
                <tr>
                    <td class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        {{ $message->message }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
