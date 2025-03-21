<div>
    @foreach($this->projects as $project)

    <li>
        <a href="">
            {{ $project->id }}. {{ $project->title }}
        </a>
    </li>    

    @endforeach
</div>
