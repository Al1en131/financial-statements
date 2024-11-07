<x-app-layout>
    <div class="">
        <div class="pl-6 lg:pl-8 space-y-6">
            <h1 class="text-white text-xl font-bold">Edit Profile</h1>
            <div class="p-4 sm:p-8 bg-white rounded-xl bg-opacity-20 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 rounded-xl bg-white bg-opacity-20 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 rounded-xl bg-white bg-opacity-20 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
