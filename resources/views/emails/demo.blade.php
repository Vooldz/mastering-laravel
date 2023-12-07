<x-mail::message>
# Introduction

The body of your message.

Content: {{ $test->content }}
new
Content: {{ $content }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

