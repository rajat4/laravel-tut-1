<x-header componentName="Hello"/>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
crossorigin="anonymous">
</head>

<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Illo, fuga eveniet recusandae est, ea praesentium reprehenderit
     amet veritatis iste saepe odit unde in doloremque velit! 
     Modi repudiandae voluptatibus quis fugiat, vitae enim placeat,
      illum quo excepturi, quisquam quibusdam quidem quas. 
      Modi autem dolorum officia vitae dolor asperiores iusto minus excepturi.</h1>

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
