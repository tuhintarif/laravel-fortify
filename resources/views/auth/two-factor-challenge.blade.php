
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm">
                        {!! session('status') !!}
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ url('/two-factor-challenge') }}">
                @csrf
                <input type="text" name="code">
                <input type="submit" id="submit" name="submit"  value="Submit">
            </form>
        </div>
    </div>

