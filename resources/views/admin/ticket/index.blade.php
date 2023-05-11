@extends("layouts.app")

@section("content")
<style type="text/css">
    .remove_this_team_member { 
        border: 1px solid;
        border-radius: 17px;
        padding: 3px;
        color: red;
        cursor: pointer;
    }
</style>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="{{__('form.Search tickets') }}" />
                    </div>
                    <!--end::Search-->
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Layout-->
                <div class="d-flex flex-xl-row" data-select2-id="select2-data-94-ui9n">
                    <div class="w-100">
                        <table class="table align-middle table-row-dashed gy-5" id="ticket_table">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody class="fs-6 fw-bold text-gray-600">
                                @foreach ($tickets as $ticket)
                                <tr style="@if($ticket->ischecked == 0) background: #ebebeb8c; border-color: #9e6c2b; @endif">
                                    <td class="mw-250px px-5">
                                        <div class="d-flex align-items-center f">
                                            <!--begin::Author-->
                                            <div class="symbol symbol-50px me-5">
                                                <div class="symbol-label fs-1 fw-bolder bg-white text-primary border">{{ substr($ticket->user->first_name, 0, 1) }}</div>    
                                            </div>
                                            <!--end::Author-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                <!--begin::Text-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Username-->
                                                    <a href="{{ url("admin/users/view/".$ticket->user->id."") }}" class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">{{ $ticket->user->first_name }} {{ $ticket->user->last_name }} @if (!empty($ticket->user->company)) ({{$ticket->user->company}}) @endif</a>
                                                    <!--end::Username-->
                                                    <span class="m-0"></span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Date-->
                                                <span class="text-muted fw-bold fs-6">{{ $ticket->created_at->format("d M Y, g:i A") }}</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <p class="fw-normal fs-5 text-gray-700 m-0 overflow-hidden mh-sm-45px text-truncate mt-5 px-10">{{ $ticket->description }}</p>
                                    </td>
                                    <td class="vertical-align-end text-end px-5" style="vertical-align: baseline" data_this_id="{{$ticket->id}}">
                                        <div>
                                            <a href="{{ url("admin/ticket/view/".$ticket->id."") }}" class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder">{{__('form.Reply') }}</a>|
                                            @if(isset($admin_access['delete_ticket']))
                                            <a href="{{ url("admin/ticket/delete/".$ticket->id."") }}" class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder delete_this">{{__('form.Delete') }}</a>
                                            @endif
                                            @if(isset($admin_access['assign_user']))
                                            | <a class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder assign_this" data_this_id="{{$ticket->id}}">{{__('form.Assign ticket to team') }}</a>
                                            @endif
                                        </div>
                                        <div class="badge badge-light-danger mt-10" style="top: -1rem; left: 1rem;">{{ $ticket->ticket_status->option }}</div>
                                        <div>
                                            <sub style="top: 1rem">{{ $ticket->number }}</sub>
                                        </div>
                                        @if(isset($admin_access['assign_user']))
                                            <div class="show_user">
                                                @foreach($ticket->ticketassign as $assign)
                                                    <sub style="top: 1rem"> {{$assign->user->first_name}} {{$assign->user->last_name}} {{$assign->user->email}} <span class="remove_this_team_member"  ticket_id="{{$ticket->id}}" user_id="{{$assign->user->id}}" style=" border: 1px solid; border-radius: 17px; padding: 3px;color: red;">X</span> |</sub>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('after_script')
<script>
    console.log($("#ticket_table"))
    var datatable = $("#ticket_table").DataTable({
        "info": false,
        'order': [],
        'pageLength': 10,
    });

    const filterSearch = document.querySelector('[data-kt-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
    });
    $(document.body).on('click', '.delete_this' ,function(e){
        e.preventDefault();
        var thishref = $(this).attr("href");
        Swal.fire({
            text: "Are you sure you want to delete?",
            icon: "success",
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: "Yes delete it!",
            cancelButtonText: "Cancel",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-primary"
            }
        }).then(function(result) {
            if (result.isConfirmed) {
                window.location.replace(thishref);
            }
        });
        return false;
    });
    @if(isset($admin_access['assign_user']))
        $(document.body).on('click', '.assign_this' ,function(e){
          var ticket_id = $(this).attr("data_this_id");

          $.ajax({
            url: "/admin/ticket/get_user",
            type: "GET",
            success: function(users) {

              var select = $("<select class='form-control' id='user_assign_select'></select>");
              $.each(users, function(index, user) {
                var option = $("<option></option>")
                  .attr("value", user.id)
                  .text(user.name+' '+user.email);
                select.append(option);
              });
              var form = $("<form></form>").append(select);
              Swal.fire({
                title: "{{__('form.Assign ticket to team') }}",
                html: form,
                showCancelButton: true,
                confirmButtonText: "Submit",
              }).then(function(result) {
                if (result.isConfirmed) {
                    var selected_val = $("#user_assign_select option:selected").val();
                    var selected_val_text = $("#user_assign_select option:selected").text();
                    console.log("selected_val"+selected_val);
                    console.log("ticket_id"+ticket_id);
                    $.ajax({
                        url: "/admin/ticket/assign_user",
                        type: "POST",
                        data: { userID: selected_val, ticketID: ticket_id },
                        success: function(response) {
                            if (response.hasOwnProperty('success')) {
                                var selectedValue = '<sub style="top: 1rem"> '+selected_val_text+'s <span class="remove_this_team_member" ticket_id="'+ticket_id+'" user_id="'+selected_val+'">X</span> |</sub>';
                                $('td[data_this_id="'+ticket_id+'"]').find(".show_user").append(selectedValue);
                            }
                        },
                        error: function() {
                          Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "User already assign to this ticket.",
                          });
                        },
                    });
                }
              });
            },
            error: function() {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong while getting the user list!",
              });
            },
          });
        });

        $(document.body).on('click', '.remove_this_team_member' ,function(e){
            var ticket_id = $(this).attr("ticket_id");
            var user_id = $(this).attr("user_id");
            var this_sub = $(this).closest("sub");
            $.ajax({
                url: "/admin/ticket/remove_assign_user",
                type: "POST",
                data: { ticket_id: ticket_id, user_id: user_id },
                success: function(response) {
                    if (response.hasOwnProperty('success')) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your operation was successful.',
                            showConfirmButton: false,
                            timer: 1500 // Time in milliseconds
                        });
                        $(this_sub).remove();
                    }
                },
                error: function() {
                  Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "User already assign to this ticket.",
                  });
                },
            });

        });
        $(document.body).on('click', '#user_assign_select' ,function(e){
            var select = $(this);
            var selectedValue = select.val();
            console.log(selectedValue); // Outputs the value of the selected option
        });
    @endif
</script>
@endsection

