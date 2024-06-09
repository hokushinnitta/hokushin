<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{-- 変更ここから --}}

@can('admin')
<p>admin権限を持つ人だけが見れるよ</p>
@endcan
<p>みんな見れるよ</p>

{{-- ここまで --}}

                </div>
            </div>
        </div>
    </div>

    <!-- 新規ユーザー登録フォーム -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="text-lg font-semibold">{{ __('Register New User') }}</h3>
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                        <input id="name" name="name" type="text" class="mt-1 block w-full" required>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <input id="email" name="email" type="email" class="mt-1 block w-full" required>
                    </div>
                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" class="mt-1 block w-full" required>
                    </div>
                    <div class="mt-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required>
                    </div>
                    <div class="mt-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">{{ __('Role') }}</label>
                        <select id="role" name="role" class="mt-1 block w-full" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ユーザー情報編集フォーム -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="text-lg font-semibold">{{ __('Edit User Information') }}</h3>
                <form method="POST" action="{{ route('users.update', ['id' => $user->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                        <input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $user->name }}" required>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ $user->email }}" required>
                    </div>
                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" class="mt-1 block w-full">
                        <small class="text-gray-600">{{ __('Leave blank to keep current password') }}</small>
                    </div>
                    <div class="mt-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full">
                    </div>
                    <div class="mt-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">{{ __('Role') }}</label>
                        <select id="role" name="role" class="mt-1 block w-full" required>
                            <option value="admin" {{ $user->hasRole('admin') ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $user->hasRole('user') ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
