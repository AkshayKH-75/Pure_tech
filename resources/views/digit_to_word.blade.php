@extends('header')

<div class="container">
    <h2>Digit Number to Word</h2>
    <div class="form-horizontal" id="frm">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Number:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="digit" placeholder="Enter number" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" onclick="getMessage()">convert to digit</button>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <span id="msg"></span>
            </div>
        </div>
    </div>
</div>

<script>
    function getMessage() {
        $.ajax({
            type: 'POST',
            url: '/convert',
            data: {
                "_token": "{{ csrf_token() }}",
                digit: $("#digit").val()
            },
            success: function(data) {
                //console.log(data);
                $("#msg").html(data);
            }
        });
    }
</script>