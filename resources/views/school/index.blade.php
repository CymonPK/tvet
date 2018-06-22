@extends('layouts.app')
@section('content')
<section class="content">
  	<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Schools in Rwanda</h3>
              </div>
              <div class="card-body table-responsive p-0">
              		<table class="table">
              			<thead>
          							<th>Name</th>
                        <th>School Code</th>
                        <th>Province</th>
                        <th>District</th>
              			</thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>School Code</th>
                        <th>Province</th>
                        <th>District</th>
                      </tr>
                  </tfoot>
                		<tbody>
                				<?php
                        $count = 1; 
                          foreach($schools as $schoolslist) {?>
                  				<tr>
                  					<td>{{$schoolslist['name']}}</td>
                            <td>{{$schoolslist['school_code']}}</td>
                            <td>{{$schoolslist['province']}}</td>
                            <td>{{$schoolslist['district']}}</td>
                  				</tr>
                				<?php } ?>
              			</tbody>
              		</table>
              </div>
            </div>
          </div>
        </div>
    </div>
 </section>
@endsection