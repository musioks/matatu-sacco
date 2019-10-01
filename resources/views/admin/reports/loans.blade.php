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
    <caption>Loan Applications List</caption>
    <thead>
        <tr>
            <th>#</th>
            <th>Member Name</th>
            <th>Loan Type</th>
            <th>Principal Amount</th>
            <th>rate</th>
            <th>Duration</th>
            <th>Interest Amount</th>
            <th>Guarantor</th>
            <th>Status</th>
            {{--                                <th>Action</th>--}}
        </tr>
    </thead>
    <tbody>
        @forelse(\App\Helpers\LeaveHelper::all_loans() as $r)
        <tr>
            <td>{{$loop->iteration ?? ''}}</td>
            <td>{{$r->loan_application->member->full_name ?? ''}}</td>
            <td>{{$r->loan_application->loan_type->name ?? ''}}</td>
            <td>{{number_format($r->loan_application->principal_amount) ?? ''}}</td>
            <td>{{($r->loan_application->loan_type->interest_rate*100) .'% p.a' ?? ''}}</td>
            <td>{{$r->loan_application->interest_period. ' years'?? ''}}</td>
            <td>{{number_format($r->loan_application->interest_amount) ?? ''}}</td>
            <td>{{$r->loan_application->guarantor->full_name ?? ''}}</td>
            <td>
                <span class="label label-info">
                    {{$r->loan_status->name ?? ''}}
                </span>
    
            </td>
    
    
        </tr>
        @empty
        {{""}}
    
        @endforelse
    </tbody>
    </table>