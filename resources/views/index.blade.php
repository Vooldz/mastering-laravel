<x-app-layout>
{{-- @include('layouts.header') --}}
{{-- @includeIf('layouts.message') --}}
{{-- @includeWhen(true, 'layouts.message') --}}
{{-- @includeFirst(['layouts.messagez', 'layouts.header']) --}}
{{-- @convUnix(time()) --}}
{{-- @checkVal("100")
The Value Is 500
@elsecheckVal('100')
The Value Is 100
@else
The Value Is Not 100 And Not 500
@endcheckVal --}}

@yield('content')
{{-- @include('layouts.footer') --}}

</x-app-layout>

