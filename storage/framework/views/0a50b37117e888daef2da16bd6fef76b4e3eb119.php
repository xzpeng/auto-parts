<?php $__env->startSection('content'); ?>
<!---->
<div class="contact" style="padding-top: 0" >
    <div class="container">
      <div class="contact-top">
        <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Contact</li>             
       </ol>
      </div>
      <div class="contact-bottom">
       <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" frameborder="0" style="border:0"></iframe> -->
        <div class="contact-text">
          <div class="col-md-3 contact-right">
            <div class="address">
              <h5>Address</h5>
              <p>The company name, 
              <span>Lorem ipsum dolor,</span>
              Glasglow Dr 40 Fe 72.</p>
            </div>
            <div class="address">
              <h5>Address1</h5>
              <p>Tel:1115550001, 
              <span>Fax:190-4509-494</span>
              Email: <a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
          </div>
          <div class="col-md-9 contact-left">
            <form>
            <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
            <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
            <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
              <div class="submit-btn">                
                  <input type="submit" value="SUBMIT">              
              </div>
            </form>
          </div>            
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
<!---->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>