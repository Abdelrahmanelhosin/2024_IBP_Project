<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf 
                        @method('PUT')

                        <div class="mb-4">
                            <label for="first_name" class="block text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$user->first_name}}" required>
                        </div>
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="mb-4">
                            <label for="last_name" class="block text-gray-700">Last Name</label>
                            <input type="text" value="{{$user->last_name}}" name="last_name" id="last_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" name="email" value="{{$user->email}}" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="tel" class="block text-gray-700">Telefone</label>
                            <input type="text" name="tel" value="{{$user->tel}}" id="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            {{-- <label for="password" class="block text-gray-700">Password</label> --}}
                            {{-- <input type="password" name="password"  placeholder="{{$user->password}}" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required> --}}
						</div>
                        <div class="mb-4">
                            <label for="register_professional_status" class="block text-gray-700">Register Professional Status</label>
                            <select name="register_professional_status" id="register_professional_status" value="{{$user->user_type}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="yes">Admin</option>
                                <option value="no">User</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="btn btn-success">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>