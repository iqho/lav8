<x-iq-layout>


<div>
    <p class="text-center p-6">
        <span class="text-4xl">Welcome!</span>
    </p>
<div>
	<table>
	@foreach($users as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
            </tr>
    @endforeach
</table>
</div>
</div>





</x-iq-layout>



