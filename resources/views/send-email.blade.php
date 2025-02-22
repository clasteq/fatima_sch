<div>
   Well begun is half done. - Aristotle 
   <form action="send-email" method="post">
    @csrf
    <input type="text" name="to" placeholder="Enter"/>
    <input type="text" name="subject" placeholder="Enter"/>
    <textarea type="text" name="message" placeholder="Enter"></textarea>
    <button>Send Email</button>
   </form>
</div>
