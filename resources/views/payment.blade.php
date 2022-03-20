@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>primeArt (Payment) - Online Education For Artists</title>
@endsection

@section('main')
<div class="jumbotron index-jumbotron">
<div class="container-fluid form-container" id="payment-container">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <h5><i class="fa fa-calendar-check-o"></i> Pay for your primeArt subscription</h5>
      <div class="card">
        <img src="/images/pay.png" style="border:1px solid #eee;" class="img-fluid">
        <p class="text-muted mt-2"><i class="fa fa-refresh"></i> Refund available within 24hrs.</p>
        <form id="make-payment-form">
          {{csrf_field()}}
          <label class="col-form-label">Choose payment method</label>
          <select class="form-control form-control-md" id="payment-method" name="payment_method">
            <option value=""></option>
            <option value="mtn-gh">MTN Mobile Money</option>
            <option value="vodafone-gh">Vodafone Cash</option>
            <option value="tigo-gh">Tigo Cash</option>
            <option value="airtel-gh">Airtel Money</option>
            <option value="">Card Payments (Not available yet)</option>
          </select>

          <label class="col-form-label mt-2">Wallet Number</label>
          <input type="text" class="form-control form-control-md" name="wallet_number">

           <div class="token-input-for-vodafone">
            <label class="col-form-label mt-2">Token</label>
            <p class="text-muted"><i class="fa fa-info-circle"></i> Dial *110# and choose option 6 to generate a token for your vodafone cash wallet.</p>
            <input type="text" class="form-control form-control-md" name="token">
          </div>

          <input type="hidden" id="transaction_id" name="transaction_id">
          <p class="text-center mt-3 mb-0" style="color:red;"><b>For mtn, tigo and airtel users, you need to confirm the prompt sent to your phone.</b></p>
          <button  class="btn btn-block btn-teal mt-1 make-payment-button">
          <i class="fa fa-check"></i> Make payment</button>
           <p class="text-center mt-2"><a href="#" data-toggle="modal" data-target="#terms-modal">In making paymet, you agree to our terms and refund policies</a></p>
          <p class="text-center">Already have an account? <a href="#">Sign in here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
</div>




<!--terms modal-->
<div class="modal fade" id="terms-modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms &amp; Conditions</h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h3><b>In completing the registration, you are deemed to have read and agreed to the following terms, conditions and privacy policy:</b></h3>
        <blockquote>
          The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any 
          or all Agreements: "Client", “You” and “Your” refers to you, the person accessing this website and accepting the 
          Company’s terms and conditions. "The Company", “Ourselves”, “We” and "Us", refers to our website(primeArt.org). “Party”, “Parties”, 
          or “Us”, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, 
          acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the 
          most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose 
          of meeting the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with 
          and subject to, prevailing English Law. Any use of the above terminology or other words in the singular, plural, 
          capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.
        </blockquote>

         <h3><b>Information Collection</b></h3>
        <blockquote>
         <p>
          Some contact information collected on primeart.org when you register is publicly available to all users on primeart.org, if you choose to provide us with your personal details, 
          you are consenting to the transfer and storage of that information in our database. You also agree to make the details you provide us public. This is to help achieve the aim of this website to 
          make contacting and connecting to users of this platform easier. We collect and store your personal details enlisted below:
         <ul>
          <li>Name,Email addresses, Mobile Phone Contact Number, Social Media Information. </li>
          <li>Personal Photograph</li>
         </ul>
         </p>
        </blockquote>


        <h3><b>Confidentiality,Privacy Policy &amp; Information Disclosure</b></h3>
        <blockquote>
          Client files are regarded as confidential and are not sold or made available to third parties without users' explicit consent. We may disclose personal information to respond to legal requirements. We protect the details
          of our users as much as we can to prevent scamming and illegal marketting. Information about our users is not used for 
          any other purposes apart from improving the services of potomanto.com
          We will not sell, share, or rent your personal files and information to any third party or 
          use your e-mail address for unsolicited mail. Any emails sent will only be in connection with the provision of services 
          and products of potomanto.com
          You agree to receive marketing communications about our services. If you don't wish to receive marketing 
          communications from us, simply contact customer support. You may not use our system or communication tools to harvest addresses, send spam or otherwise breach our 
          Terms of Conditions or Privacy Policy. We may automatically scan and manually filter email messages sent via our communication tools for malicious activity or prohibited content. 
          If you use our tools to send content to a friend, we don't permanently store your friends' addresses or use or disclose them for marketing purposes. 
          To report spam from other users, please contact customer support.
        </blockquote>

        <h3><b>Protection &amp; Security</b></h3>
        <blockquote>
        We employ a wide number of tools ranging from encryption and other forms of security to protect your personal information against unauthorized access and disclosure.
        All personal electronic details will be kept private by the service except for those that you wish to disclose.
        It is unacceptable to disclose the contact information of others through this Service to third parties.
        If you violate the laws of your country of residence and/or the terms of use of the Service you forfeit your privacy rights over your personal information.
        </blockquote>

        <h3><b>Cookies</b></h3>
        <blockquote>
          Like most interactive web sites this  website  uses cookies to enable us to retrieve user details for each visit. 
          Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. 
          Some of our affiliate partners may also use cookies.
        </blockquote> 

        <h3><b>Links to this website</b></h3>
        <blockquote>
          You may create a link to any page of this website. If you do create a link to a page of 
          this website you do so at your own risk and the exclusions and limitations set out above will apply to your use of this website 
          by linking to it.
        </blockquote>

        <h3><b>Links from this website</b></h3>
        <blockquote>
          We do not monitor or review the content of other party’s websites which are linked to from this website. Opinions expressed or 
          material appearing on such websites are not necessarily shared or endorsed by us and should not be regarded as the publisher of 
          such opinions or material. Please be aware that we are not responsible for the privacy practices, or content, of these sites. 
          We encourage our users to be aware when they leave our site and to read the privacy statements of these sites. You should evaluate 
          the security and trustworthiness of any other site connected to this site or accessed through this site yourself, before disclosing 
          any personal information to them. We will not accept any responsibility for any loss or damage in whatever manner, 
          howsoever caused, resulting from your disclosure to third parties of personal information.
        </blockquote>

        <h3><b>Unsuscribe Option</b></h3>
        <blockquote>
         If at any time you wish to have your information removed from our active databases, please contact us. 
         This website makes use of Display Advertising, and uses Remarketing technology with Google Analytics to advertise online. Third-party vendors, 
         including Google, may show our ads on various websites across the Internet,
         using first-party cookies and third-party cookies together to inform, optimize, and serve ads based on past visits to our website.
        
        </blockquote>

        <h3><b>Copyright Notice</b></h3>
        <blockquote>
          Copyright and other relevant intellectual property rights exists on all text relating to the our services and the full 
          content of this website.<br>
        <!--   Our logo is a registered trademark in Ghana and other countries. The brand names and 
          specific services of this Company featured on this web site are trade marked -->
        </blockquote>

        <h3><b>Force Majeure</b></h3>
        <blockquote>
          Neither party shall be liable to the other for any failure to perform any obligation under any Agreement which is due to an 
          event beyond the control of such party including but not limited to any Act of God, terrorism, war, Political insurgence, 
          insurrection, riot, civil unrest, act of civil or military authority, uprising, earthquake, flood or any other natural or 
          man made eventuality outside of our control, which causes the termination of an agreement or contract entered into, nor 
          which could have been reasonably foreseen. Any Party affected by such event shall forthwith inform the other Party of the 
          same and shall use all reasonable endeavours to comply with the terms and conditions of any Agreement contained herein.
        </blockquote>

        <h3><b>General</b></h3>
        <blockquote>
           The laws of Ghana govern these terms and conditions. By accessing this website and using our services and or products you 
           consent to these terms and conditions and to the exclusive jurisdiction of the Ghanaian courts in all disputes arising out 
           of such access. If any of these terms are deemed invalid or unenforceable for any reason (including, but not limited to the 
           exclusions and limitations set out above), then the invalid or unenforceable provision will be severed from these terms and 
           the remaining terms will continue to apply. Failure of the Company to enforce any of the provisions set out in these Terms 
           and Conditions and any Agreement, or failure to exercise any option to terminate, shall not be construed as waiver of such 
           provisions and shall not affect the validity of these Terms and Conditions or of any Agreement or any part thereof, or the 
           right thereafter to enforce each and every provision. These Terms and Conditions shall not be amended, modified, varied or 
           supplemented except in writing and signed by duly authorized representatives of the ours.   
        </blockquote>

        <h3><b>Notification of Changes </b></h3>
        <blockquote>
          The Company reserves the right to change these conditions from time to time as it sees fit and your continued use of our services 
          will signify your acceptance of any adjustment to these terms. If there are any changes to our privacy policy, we will announce 
          that these changes have been made on our home page and on other key pages on our site. If there are any changes in how we use our 
          site customers’ Personally Identifiable Information, notification by e-mail or postal mail will be made to those affected by this 
          change. Any changes to our privacy policy will be posted on our web site 10 days prior to these changes taking place. You are 
          therefore advised to re-read this statement on a regular basis.
        </blockquote>

         <h3><b>Subscription Fees, Cancellation and Refund Policy</b></h3>
         <h4>Subscription Fees</h4>
         <blockquote>
           <ul>
             <li>Your account is charged on the same date as you make your subscription request.</li>
             <li>Primeart may terminate the subscription and these terms if it is unable to renew the subscription based on inaccurate, outdated credit card or mobile money wallet information.</li>
             <li>Right of access granted under these Terms is effective only upon payment of the subscription fees.</li>
             <li>Primeart.org may increase subscription fees for a subsequent subscription period at any time and for any reason, provided, however, that Primeart.org provides notice at least thirty (15) calendar days prior to the expiration of the subscription.</li>
           </ul>
         </blockquote>
         <h4>Cancelling Account</h4>
         <blockquote>
           <li>You can cancel your subscription from your account profile page after which all your information will immediately be removed from our databases and your access denied. 
           </li>
         </blockquote>
         <h4>Refunds</h4>
         <blockquote>
           <li>
             You can only request for a refund within 24 hours after your first registration into primeArt.org, all other proceeding renewals will not be refunded.
           </li>
         </blockquote>

        
        <h3><b>Conclusion</b></h3>
        <blockquote>
          These terms and conditions form part of the Agreement between the Client and ourselves. Your accessing of this website, 
          using our services and/or undertaking of a booking or Agreement indicates your understanding, agreement to and acceptance, of 
          the Disclaimer Notice and the full Terms and Conditions contained herein. Your statutory Consumer Rights are unaffected.    
        </blockquote>
         
            </div>
          </div>
        </div>
          
             <div class="modal-footer">
               <button type="button" class="btn btn-dark close-modal" data-dismiss="modal">I Agree</button>
             </div>
      </div><!--end modal body-->
    </div><!--end modal content-->
  </div><!--end modal dialog-->
</div><!--end main modal-->
@endsection


@section('custom-scripts')
<script type="text/javascript" src="/js/payments/make-payments.js"></script>
<script type="text/javascript">
  $(function(){
    $(".token-input-for-vodafone").hide();
  });
</script>
@endsection

