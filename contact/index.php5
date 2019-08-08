
<?php
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="Contact Us";
?>

<?php
include 'fullHeader.inc';
?>
<div class="outer_2col">

<div class="float-wrap_2col">

  <div class="center_2col">

        <div class="innertube">

<?php
include 'breadcrumbs.inc';
?>

                        <div>
                          <h1>Send a Message</h1>
                        </div>
                        <br/>

                        <form method="post" action=" http://www.wareabouts.com/cgi-bin/form_to_mail.php">
                          <input type="hidden" name="recipient" value="formreply@wareabouts.com ">
                          <input type="hidden" name="from" value="formreply@wareabouts.com">
                          <input type="hidden" name="subject" value="Email Form">
                          <input type="hidden" name="success_redirect" value="/contact/messageSent.php5">
                        
                          <table align="center" cellspacing="5" cellpadding="5" border="0">
                            <tr>
                              <td width="70" valign="top">
                                <b>Your Name:</b>
                              </td>
                              <td>
                                <input type="text" size="50" name="name"/>
                              </td>
                            </tr>
                            <tr>
                              <td width="70" valign="top">
                                <b>Your Email:</b>
                              </td>
                              <td>
                                <input type="text" size="50" name="email"/>
                              </td>
                            </tr>
                            <tr>
                              <td width="70" valign="top">
                                <b>Message:</b>
                              </td>
                              <td>
                                <textarea cols="47" rows="7" name="message"></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                &nbsp;
                              </td>
                              <td>
                                <input type="submit" name="submit" value="Send"/>
                                <input type="reset" name="reset" value="Reset"/>
                              </td>
                            </tr>
                          </table>
                        </form>

                        </div>


                    </div> <!-- end of center -->
<div class="left">
<div class="container-left">

<?php
include 'leftYearsWithRandom.inc';
?>
            </div>

            
            </div>
                </div>

<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->
 
</div>
            
<?php
include 'footer.inc';
?>

