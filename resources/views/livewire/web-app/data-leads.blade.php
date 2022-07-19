@section('title', 'Data Leads')

<div class="col-lg-12">
    <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
        <h4 class="title float-left">DataLeads</h4>
        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="/WebApp/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Leads</li>
        </ol>
    </nav>
</div>

<div class="col-md-12 col-lg-12">
    <div class="shortcode_widget_tab">
        <div class="">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="Contact-Leads-tab" data-toggle="tab" href="#Contact-Leads" role="tab" aria-controls="Contact-Leads" aria-selected="true">Contact Leads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Enquiry-Leads-tab" data-toggle="tab" href="#Enquiry-Leads" role="tab" aria-controls="Enquiry-Leads" aria-selected="false">Enquiry Leads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Bespoke-Leads-tab" data-toggle="tab" href="#Bespoke-Leads" role="tab" aria-controls="Bespoke-Leads" aria-selected="false">Bespoke Leads</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Contact-Leads" role="tabpanel" aria-labelledby="Contact-Leads-tab">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Lead Name</th>
                                <th scope="col">Lead Email</th>
                                <th scope="col">Lead Phone</th>
                                <th scope="col">Lead Subject</th>
                                <th scope="col">Lead Message</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Created By</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact_obj as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->Lead_Name }}</td>
                                    <td>{{ $contact->Lead_Email }}</td>
                                    <td>{{ $contact->Lead_Phone }}</td>
                                    <td>{{ $contact->Lead_Company }}</td>
                                    <td>{{ $contact->Company_Phone }}</td>
                                    <td>{{ $contact->Company_Designation }}</td>
                                    <td>{{ $contact->Lead_Message }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($contact->created_at)) }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($contact->updated_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="Enquiry-Leads" role="tabpanel" aria-labelledby="Enquiry-Leads-tab">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Lead Name</th>
                                <th scope="col">Lead Email</th>
                                <th scope="col">Lead Phone</th>
                                <th scope="col">Lead Company</th>
                                <th scope="col">Company Phone</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Message</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Created By</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiry_obj as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->Lead_Name }}</td>
                                    <td>{{ $contact->Lead_Email }}</td>
                                    <td>{{ $contact->Lead_Phone }}</td>
                                    <td>{{ $contact->Lead_Company }}</td>
                                    <td>{{ $contact->Company_Phone }}</td>
                                    <td>{{ $contact->Company_Designation }}</td>
                                    <td>{{ $contact->Lead_Message }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($contact->created_at)) }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($contact->updated_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="Bespoke-Leads" role="tabpanel" aria-labelledby="Bespoke-Leads-tab">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Course Duration</th>
                                <th scope="col">Participants</th>
                                <th scope="col">Venues</th>
                                <th scope="col">Date</th>
                                <th scope="col">Objectives</th>
                                <th scope="col">Salutaion</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Company</th>
                                <th scope="col">Address</th>
                                <th scope="col">Country</th>
                                <th scope="col">City</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bespoke_obj as $bespoke)
                                <tr>
                                    <td>{{ $bespoke->id }}</td>
                                    <td>{{ $bespoke->Course_Title }}</td>
                                    <td>{{ $bespoke->Course_Duration }}</td>
                                    <td>{{ $bespoke->Course_Participant }}</td>
                                    <td>{{ $bespoke->Course_Venue }}</td>
                                    <td>{{ $bespoke->Start_Date }}</td>
                                    <td>{{ $bespoke->Course_Objective }}</td>
                                    <td>{{ $bespoke->Course_Salutation }}</td>
                                    <td>{{ $bespoke->Lead_Name }}</td>
                                    <td>{{ $bespoke->Lead_Designation }}</td>
                                    <td>{{ $bespoke->Lead_Company }}</td>
                                    <td>{{ $bespoke->Lead_Address }}</td>
                                    <td>{{ $bespoke->Lead_Country }}</td>
                                    <td>{{ $bespoke->Lead_City }}</td>
                                    <td>{{ $bespoke->Lead_Email }}</td>
                                    <td>{{ $bespoke->Lead_Phone }}</td>
                                    <td>{{ $bespoke->Lead_Telephone }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($bespoke->created_at)) }}</td>
                                    <td>{{ date('F d, Y H:i:s', strtotime($bespoke->updated_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
