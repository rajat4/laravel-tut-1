<x-header componentName="Users" />
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
crossorigin="anonymous">
</head>
<h1>User Page</h1>
<a href="/">Home</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/users">Users</a>
<br>
{{URL::current()}}
<br>
{{URL::full()}}
<br>
{{URL::previous()}}