<x-app-layout>
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <x-slot name="title">
            {{ __('Profile') }}
        </x-slot>
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="dark:text-navy-50 text-xl font-medium text-slate-800 lg:text-2xl">
                {{ __('Profile') }}
            </h2>
        </div>

        <div>
            <div class="mx-auto">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </main>
</x-app-layout>
