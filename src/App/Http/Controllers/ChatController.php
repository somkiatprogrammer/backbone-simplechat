<?php

namespace App\Http\Controllers;

use App\Message;
use Request;

class ChatController extends Controller {

    /**
     * Permission Guest.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware ( 'guest' );
    }

    /**
     * Show the application Simplechat screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view ( 'chat' );
    }

    /**
     * Get the messages.
     *
     * @return Json
     */
    public function get() {
        return json_encode ( Message::get () );
    }

    /**
     * Remove the message by ID.
     *
     * @param number id
     * @return number
     */
    public function remove($id) {
        $message = Message::find($id);

        return (int)$message->delete();
    }

    /**
     * Add/Edit the message.
     * 
     * @param number $id
     * @return number
     */
    public function save($id) {
        $person = Request::input ( 'person' );
        $text = Request::input ( 'message' );
        
        if ($id == 0) {
            $message = new Message ();
            $message->person = $person;
            $message->message = $text;
            
            return ( int ) $message->save ();
        } else {
            return ( int ) Message::where ( 'id', $id )->update ( 
                array (
                    'message' => $text 
                ) );
        }
        
        return 0;
    }
}
