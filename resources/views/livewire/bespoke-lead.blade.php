<div class="row pb-50 mb-10">
    <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Bespokes Leads Table</h1>
        <div class="mt-10">In this Section you can create New Category & See Categories</div>

    </div>
</div>

<div class="row y-gap-60">

    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
          <div class="d-flex items-center py-20 px-30 border-bottom-light">
            <h2 class="text-17 lh-1 fw-500">Bespoke Detail</h2>
          </div>

          <div class="py-30 px-30" style="overflow: auto;">
            <table class="table w-1/1" style="overflow-x: scroll;">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Course Title</th>
                    <th>Course Duration</th>
                    <th>Participants</th>
                    <th>Venues</th>
                    <th>Date</th>
                    <th>Objectives</th>
                    <th>Salutaion</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Telephone</th>
                    <th>Created At</th>
                    <th>Created By</th>
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

