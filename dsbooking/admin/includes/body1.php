<div style="float:right; width:100%;"> 

	
<div class="container"  ng-app="angularTable" style="width:100%;">
     <div class="panel panel-primary">
       
            <div class="panel-body">
      <div ng-controller="listdata">
        <!--<div class="alert alert-success">
          <p>Sort By: {{sortBy}}</p>
          <p>Reverse: {{reverse}}</p>
          <p>Search Text : {{search}}</p>
        </div>-->
       
          <div class="col-md-12">
          
            <input type="text" ng-model="search" class="form-control" placeholder="Type your search keyword..">
          </div>
        <div style="width:100%; height:20px; clear:both;"></div>
        <table class="table table-striped table-hover">
          <thead style="background:#34495E; color:#fff;">
           <tr>
				<th style="width: 50px;">ID</th>
				<th style="width: 200px;">Tour Type</th>
				<th style="width: 200px;">Customer details</th>
				<th style="width: 100px;">Total</th>
				<th style="width: 100px;">Status</th>
				<th style="width: 100px;">Created Date</th>
			</tr>
          </thead>
          <tbody>
            <tr dir-paginate="product in products|orderBy:sortBy:reverse|filter:search|itemsPerPage:5">
              <td>{{product.ID}}</td>
              <td>{{product.tourname}}<br><a href="#">{{product.bookingdate}}</a></td>
			  <td><span class="pj-table-cell-label"><a href="admin.php?page=ds-booked&view={{product.ID}}">{{product.firstname }} {{product.lastname}}</a><br><a href="#">{{product.email}}</a><br>{{product.contactno}}</span></td>
			  <td style="text-align: right;"><span class="pj-table-cell-label">USD {{product.total}}</span></td>
			  <td class="pj-table-cell-editable"><span class="pj-table-cell-label pj-status pj-status-pending">{{product.status}}</span></td>
			  <td>{{product.date}}</td>
            </tr>
          </tbody>
        </table> 
        <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true">
        </dir-pagination-controls>
      </div>
    </div>
    
      </div>
    
</div>
 
	
</div>