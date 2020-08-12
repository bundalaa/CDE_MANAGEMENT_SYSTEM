 <?php

// namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use Notification;
use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('notification');
    }
}
