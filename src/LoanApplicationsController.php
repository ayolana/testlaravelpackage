<?php 

namespace Armony\LoanApplications;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

class LoanApplicationsController extends Controller{

	public function test()
	{

		return view('loans::create');
		dd('Hello from the Package Section');
	}

}



 ?>