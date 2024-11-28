<?php

namespace App\Controllers;

use Exception;
use Pecee\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class ContactFormController
{
    public function submit()
    {;

        // return  response()->json(['messgae' => env('MAIL_HOST')]);
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Extract form data from the request
        $name = input('name');
        $email = input('email');
        $phone = input('phone');
        $whatsapp = input('whatsapp');
        $courses = input('courses');

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = 'ssl'; // Use 'tls' if you switch to port 587
            $mail->Port       = (int) env('MAIL_PORT');
            // Recipients
            $mail->setFrom($email);
            $mail->addAddress(env('MANAGEMENT_MAIL_ADDRESS'));               // Add a recipient

            // Content
            $mail->isHTML(true);                                      // Set email format to HTML
            $mail->Subject = 'New Booking Request';

            // Prepare the email body
            $mail->Body = "
                <h1>New Booking Request</h1>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> <a href='tel:{$phone}'>{$phone}</a></p>
                <p><strong>WhatsApp:</strong> <a href='wa.me/{$whatsapp}'>{$whatsapp}</a></p>
                <p><strong>Course:</strong> {$courses}</p>
            ";
            $mail->AltBody = "New Booking Request\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nWhatsApp: {$whatsapp}\nCourses: {$courses}";

            // Send the email
            $mail->send();
            return response()->json(['message' => 'Message has been sent']); // JSON response
        } catch (PHPMailerException $e) {
            return response()->json(['error' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]); // JSON response
        } catch (Exception $e) {
            return response()->json(['error' => "An error occurred: {$e->getMessage()}"]); // General error response
        }

        return; // Explicitly returning nothing
    }
}
