<h1>select</h1>
<ul>
    @foreach($subData as $ user)
    <li>{{$user,$email,$Pass}}</li>
    @endforeach
</ul>