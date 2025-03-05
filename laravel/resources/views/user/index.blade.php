@extends('layouts.app')

@section('title', 'ユーザ一覧')

@section('content')
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ユーザID
                </th>
                <th scope="col" class="px-6 py-3">
                    名前
                </th>
                <th scope="col" class="px-6 py-3">
                    年齢
                </th>
                <th scope="col" class="px-6 py-3">
                    メッセージ
                </th>
            </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4"><a class="text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('users.show', $user->id) }}">{{ $user->id }}</a></td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->profile->age }}歳</td>
                    <td class="px-6 py-4">
                        @foreach($user->messages as $message)
                            {{ mb_substr($message->message, 0, 40) }} ...<br>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $users->links() }}
@endsection
