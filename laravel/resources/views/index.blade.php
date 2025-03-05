<table>
@foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->profile->age }}歳</td>
        <td>
            @foreach($user->messages as $message)
                {{ mb_substr($message->message, 0, 10) }} ...<br>
            @endforeach
        </td>
    </tr>
@endforeach
</table>
