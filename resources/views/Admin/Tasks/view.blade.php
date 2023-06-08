@extends('layouts.admin')
<style>
.header {
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  color: #f06548;
  display: flex; /* add this to enable flexbox */
  align-items: center; /* add this to center items vertically */
}

.header i {
  margin-right: 10px; /* adjust this value to increase/decrease the space */
}

.header-line {
  height: 1px;
  background-color: #bfbfbf;
  margin-top: 20px;
  margin-bottom: 20px;
}

.back-btn{
  margin-bottom: 20px;
}

.edit-btn{
  color: #c4bfbf !important;
  font-size: 1.5rem !important;
}

.task-head {
margin-top: 10px;
  font-size: 24px;
  margin-bottom: 8px;
}
.task-email {
    font-size: 0.8rem;
}
.file-upload-card {
  background-color: #f5f5f5 !important; /* change the background color */
  margin-left: 20px;
  margin-right: 20px;
}
/* .card {
  background-color: transparent;
} */

.task {
  margin: 20px 0;
}

/* task Content */
.task-content {
  padding: 20px;
  background: #fff;
  border-radius: 18px;
  height: auto;
}

.task-detail-name {
    margin-top: 20px;
  margin-bottom: 10px;
  margin-left: 20px;

}

.task-detail-head {
    color: #212529;
  font-size: 16px;
  font-weight: 600;
    margin-top: 10px;
  font-size: 30px;
  margin-bottom: 10px;
  font-weight: bold;
    text-transform: uppercase;
}

.due-date {
  font-size: 1.2rem; /* add this to set the font size */
  margin-bottom: 10px;
}

.date-posted {
  font-size: 0.8rem;
  color: #878a99;
}

.task-details {
  font-size: 1.2rem; /* add this to set the font size */
  margin-bottom: 10px;
  margin-left: 20px;
  margin-right: 20px;
}

.task-attachments {
    margin-left: 20px;
}

.task-attachments-name {
    font-weight: bold;
    font-size: 0.8rem;
  color: #878a99;
}

.task-attachments-card {
  background-color: #f5f5f5;
  padding: 10px;
  border-radius: 10px;
  margin-top: 10px;
  margin-right: 20px;
}


.card-body {
  padding: 0.5rem;
  margin-left: 20px;
  margin-right: 20px;
  text-align: right; /* Add this line */
  table {
    width: 100%;
    tr {
      display: flex;
      td {
        a.btn {
          font-size: 0.8rem;
          padding: 3px;
        }
      }
      td:nth-child(2) {
        text-align: right;
        justify-content: space-around;
      }
    }
  }
}

.card-title:before{
  display:inline-block;
  font-family: 'Font Awesome\ 5 Free';
  font-weight:900;
  font-size: 1.1rem;
  text-align: center;
  border: 2px solid grey;
  border-radius: 100px;
  width: 30px;
  height: 30px;
  padding-bottom: 3px;
  margin-right: 10px;
}

h2.text-center {
  margin-bottom: 20px;
}

.submission-card {
  margin-left: 20px;
  margin-right: 20px;
}

.submit-header {
  margin-left: 20px;
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  color: #f06548;
  display: flex; /* add this to enable flexbox */
  align-items: center; /* add this to center items vertically */
}

.card.display-none{
  display: none;
  transition: opacity 2s;
}

</style>

@section('content')

<div class="container-fluid">
                <a href="{{route('tasks-admin')}}">
                <button type="button" class="btn back-btn btn-outline-danger">Back</button>
                </a>
    <div class="row task">
                
            <div class="task-content">
            <button type="button" class="btn edit-btn float-end"><i class="fas fa-edit"></i></button>
                <div class="task-detail-name">
                    <h5 class="task-detail-head">Create a Project</h5>
                    <div class="due-date">
                        <p><i class="fas fa-clock" style="margin-right: 5px;"></i><strong>Due Date:</strong> May 20, 2023</p>
                    </div>
                    <div class="date-posted"> 
                    <p><i class="task-icon fas fa-flag" style="margin-right: 5px;"></i><strong>Date Posted:</strong> May 17, 2023</p>
                    </div>
                </div>
                <div class="header-line"></div>
                    <div class="task-details">
                        <p>Make sure to accomplish this and have it signed by your Project Adviser after he/she reviewed and approved the contents of your Presentation files.</p>
                    </div>
                <div class="task-attachments">      
                    <h6 class="task-attachments-name"><i class="fas fa-paperclip" style="margin-right: 5px;"></i><strong>Attachments</strong></h6>
                    <div class="task-attachments-card">
                        <div class="card-body ">
                        
                        </div>
                    </div>
				</div>
                <div class="header-line"></div>
            </div>
		</div>
	</div>
</div>
<div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="submit-header mt-2"><i class="fas fa-file" style="margin-right: 10px;"></i> Submissions</h5>
        </div>
        <div class="header-line"></div>
        <div class="card submission-card">
            <div class="card-body">
                <table>
                    <tr>
                    <td style="width:90%"><div class="card-title"><b>Jose Manalo</b> submitted.</div></td>
                    <td style="width:30%">
                        <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-danger mr-1">Accept</a>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-light mr-1" style="margin-left: 10px;">View</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
        </div>     
        <div class="card submission-card">
            <div class="card-body">
                <table>
                    <tr>
                    <td style="width:90%"><div class="card-title"><b>Ken Ammay</b> submitted.</div></td>
                    <td style="width:30%">
                        <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-danger mr-1">Accept</a>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-light mr-1" style="margin-left: 10px;">View</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
        </div>    
      </div>
@endsection