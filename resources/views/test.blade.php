@extends('layouts.basic')

@section('content')

<style>
.other {
    display: none;
}
.individual {
    display: none;
}
.group  {
    display: none;
}
</style>

<form action="/endorse/submit">

    <text class="">Endorsing on behalf of an individual or group?<br></text>
    <label>Individual</label>
    <input type="radio" name="type" value="individual">
    <label>Group</label>
    <input type="radio" name="type" value="group">
    <br class="other">

    {{--fields for individual--}}

    <text class="individual">Your Name:*</text>
    <input class="individual" type="text" name="individual_name">
    <br class="individual">

    <text class="individual">Position:</text>
    <input class="individual" type="text" name="position">
    <br class="individual">

    {{--end--}}

    {{--fields for group--}}

    <text class="group">Group Name:*</text>
    <input class="group" type="text" name="group_name">
    <br class="group">

    <text class="group">Number of Members:</text>
    <input class="group" type="number" name="number_of_members">
    <br class="group">

    {{--end--}}

    {{--other fields--}}

    <text class="other">Message:</text>
    <input class="other" type="textarea" name="message">

    {{--end--}}

    <input class="other" type="submit" value="Submit">
</form>








<script>

$('input[type=radio]').on('change', function() {
    var type = $('input[type=radio]:checked').val()
    if (type == 'group') {
        $('.group').show();
        $('.individual').hide();
    } else if (type == 'individual') {
        $('.group').hide();
        $('.individual').show();
    }
    $('.other').show();
})
</script>
@stop
