@extends('header')
<div class="container">
    <div class="md1">
    <div>
            <h2>Add player</h2>
            <div class="form-horizontal" id="frm" style="margin-bottom: 20px;">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Player Name:</label>
                    <div class="col-sm-2">
                        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Birth County:</label>
                    <div class="col-sm-2">
                        <input type="birth_country" class="form-control" id="birth_country" placeholder="Enter Birth country" name="bith_country">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Birth County:</label>
                    <div class="col-sm-2">
                        <input type="team" class="form-control" id="team" placeholder="Enter Birth country" name="team">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" onclick="addPlayer()">convert to digit</button>
                    </div>
                </div>
            </div>
        </div>
        <table style="border: 1px solid; margin-top: 50px;" class="table table-borderless table-data3 playerTable">
            <thead>
                <tr>
                    <th>Player</th>
                    <th>Birth Country</th>
                    <th>Team</th>
                </tr>
            </thead>
            <tbody id="playerList">
                @foreach($data as $list)
                <tr>
                    <td>{{$list->Player}}</td>
                    <td>{{$list->Birth_country}}</td>
                    <td>{{$list->Team}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-md-4">
            <label class="control-label mb-1">Player</label>
            <select id="player" name="player" class="form-control" required>
                <option value="0">Select Player</option>
                @foreach($data as $list)
                <option value="{{$list->Player}}">{{$list->Player}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="control-label mb-1">Birth Country</label>
            <select id="bithCountry" name="bithCountry" class="form-control" required>
                <option value="0">Select Birth Country</option>
                @foreach($data as $list)
                <option value="{{$list->Birth_country}}">{{$list->Birth_country}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="control-label mb-1">Team</label>
            <select id="teamPlayer" name="team" class="form-control" required>
                <option value="0">Select Team</option>
                @foreach($data as $list)
                <option value="{{$list->Team}}">{{$list->Team}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="md4">
            <button type="submit" onclick="searchPlayer()" class="btn btn-success">Serach</button>
        </div>
        <div class="md4" id="tableData" style="margin-bottom: 100;">
        <table style="border: 1px solid;">
            <thead>
                <tr>
                    <th>Player</th>
                    <th>Birth Country</th>
                    <th>Team</th>
                </tr>
            </thead>
            <tbody id='playerSearch'>
            </tbody>
        </table>
        </div>
       
    </div>
</div>
</div>

<script>
    function addPlayer() {
        $.ajax({
            type: 'POST',
            url: '/addPlayer',
            data: {
                "_token": "{{ csrf_token() }}",
                Player: $("#name").val(),
                Birth_Country: $("#birth_country").val(),
                Team: $("#team").val()
            },
            success: function(data) {
                //console.log(data);
                $("#playerList").append(`<tr> <td>${data.id}</td>
                <td>${data.Player}</td><td>${data.Birth_Country}</td>
                <td>${data.Team}</td>

                </tr>`);
            }
        });
    }

    function searchPlayer() {
        $.ajax({
            type: 'post',
            url: '/getPlayer',
            data: {
                "_token": "{{ csrf_token() }}",
                Player: $("#player").val(),
                Birth_Country: $("#bithCountry").val(),
                Team: $("#teamPlayer").val()
            },
            success: function(data) {
                data.forEach(myFunction);
                function myFunction(item, index) {
                    let playerdata = `<tr><td style='padding: 2px'>${item.Player}</td>
                    <td style='padding: 2px'>${item.Birth_country}</td>
                    <td style='padding: 2px'>${item.Team}</td></tr>`
                    $("#playerSearch").append(playerdata);
                }
                //$('#tableData').html(data1);
            }
        });
    }
</script>