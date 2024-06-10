@extends('user.app')

@section('title')
    Activities
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><a href="/user/dashboard" class="text-muted fw-light">Dashboard /</a> Activities</h4>




    <!-- Basic Bootstrap Table -->
    <div class="card">
    
    <div id="model" data-name="activities"></div>

    

    <div style="display: flex;justify-content: space-between;" class="mb-0 d-flex justify-content-around">
      
      <h5 class="card-header showingBy"> Activities </h5>

</div>


      <div class="table-responsive text-nowrap m-3">
        <table id="dataTable" class="table" data-filter="ALL">
          <thead>
            <tr>
              <th>Activity</th>
              <th>Username</th>
              <th>Date</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

  </div>


   <!-- Large Modal -->
   <div class="modal fade" id="view" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel3"> Activity Descripion</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
 
        <div class="modal-body">
          <div class="row">
            <div class="col-12 mb-3">
              


                <p id="description"></p>
            </div>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
         </div>
      </div>
    </div>
  </div>




@endsection