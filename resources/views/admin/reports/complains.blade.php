<style>
    #layout {
        border-collapse: collapse;
        width: 100%;
        margin-top: 40px;
        caption-side: top;
        margin-left: -10px;
    }

    #layout td,
    #layout th {
        border: 1px solid #ddd;
        padding: 3px;
        font-size: 0.9em;
    }


    #layout tr:hover {
        background-color: #ddd;
    }

    #layout th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #eceff1;
        color: #222222;
    }

    caption {
        font-size: 26px;
        font-weight: bold;
        color: #222222;
        padding: .2em .8em;
    }

    /* Create 2 unequal columns that floats next to each other */
    }

    .column {
        float: left;
        padding: 10px;
    }

    .left {
        width: 90%;
    }

    .right {
        width: 10%;
    }

    /* Clear floats after the columns */
    .header:after {
        content: "";
        display: table;
        clear: both;
        margin-bottom: -80px;
    }
</style>
<div class="header">
    <div class="column left">ONLINE MATATU SACCO SYSTEM</div>
    <div class="column right">
    </div>
</div>
<h6>&nbsp;</h6>
<hr>   
  <table id="layout">
      <caption>Complains List</caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Description</th>
            <th>Date Commited</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($complains))
        @foreach($complains as $complain)
        <tr>
            <td>{{$complain->name}}</td>
            <td>{{$complain->email}}</td>
            <td>{{$complain->phone}}</td>
            <td>{{$complain->pic}}</td>
            <td>{{$complain->description}}</td>
            <td>{{date('F d, Y', strtotime($complain->created_at))}}</td>
        </tr>
        @endforeach
        @endif

    </tbody>
</table>