<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                @if (session('status') === 'two-factor-authentication-enabled')
                    <div class="mb-4 font-medium text-sm">
                        Please finish configuring two-factor authentication below.
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                    </div>
                @endif

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm">
                                    {!! session('status') !!}
                                </div>
                            @endif
                        </div>
                        <form method="POST" action="{{ route('two-factor.confirm') }}">
                            @csrf
                            <input type="text" name="code">
                            <input type="submit" id="submit" name="submit"  value="Submit">
                        </form>
                    </div>
                </div>

                @if (session('status') === 'two-factor-authentication-confirmed')
                    <div class="mb-4 font-medium text-sm">
                        Two factor authentication confirmed and enabled successfully.
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
