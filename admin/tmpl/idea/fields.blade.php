@php
    /** @var \Joomplace\X\Model $item */
@endphp

@section('field.project_id')
    @php
        $field = 'project_id';
    @endphp
    <label>@lang($item->getLabelFor($field))</label>
    <select name="{{$field}}">
        <option disabled="disabled" value="">@lang('COM_ROADMAP_IDEA_SELECT_THE_PROJECT')</option>
        @foreach(\Joomplace\Component\Roadmap\Admin\Model\Project::all() as $project)
            <option value="{{$project->id}}" {{$project->id==$item->$field?'selected':''}}>{{$project->title}}</option>
        @endforeach
    </select>
@endsection