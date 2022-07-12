<div class="row pb-50 mb-10">
    <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Contact Leads Table</h1>
        <div class="mt-10">In this Section you can create New Category & See Categories</div>

    </div>
</div>

<div class="row y-gap-60">

    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
          <div class="d-flex items-center py-20 px-30 border-bottom-light">
            <h2 class="text-17 lh-1 fw-500">Contact Detail</h2>
          </div>

          <div class="py-30 px-30" style="overflow: auto;">
            <table class="table w-1/1" style="overflow-x: scroll;">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Lead Name</th>
                    <th>Lead Email</th>
                    <th>Lead Phone</th>
                    <th>Lead Subject</th>
                    <th>Lead Message</th>
                    <th>Created At</th>
                    <th>Created By</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($contact_obj as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->Lead_Name }}</td>
                            <td>{{ $contact->Lead_Email }}</td>
                            <td>{{ $contact->Lead_Phone }}</td>
                            <td>{{ $contact->Lead_Subject }}</td>
                            <td>{{ $contact->Lead_Message }}</td>
                            <td>{{ date('F d, Y H:i:s', strtotime($contact->created_at)) }}</td>
                            <td>{{ date('F d, Y H:i:s', strtotime($contact->updated_at)) }}</td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
          </div>
        </div>
      </div>

  </div>

