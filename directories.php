		<style>
			input[type=text], select, textarea {
			width: 100%; /* Full width */
			height: 40px;
			border: 1px solid #ccc; /* Gray border */
			border-radius: 4px; /* Rounded borders */
			box-sizing: border-box; /* Make sure that padding and width stays in place */
			margin-top: 6px; /* Add a top margin */
			margin-bottom: 16px; /* Bottom margin */
			resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
			}

			/* Style the submit button with a specific background color etc */
			input[type=submit] {
			background-color: blue;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}

			/* When moving the mouse over the submit button, add a darker green color */
			input[type=submit]:hover {
			
			}
			.contact_form{
				width:50%;
			}
			.contact_form, .contact_info{
				display: inline-block;
			}
			.contact_info{
				float: right;
			}
			ul{
				/* list-style-type: none;
				text-decoration: none; */
				color: gray;
			}
			#titl{
				color: blue;
				font-weight: bold;
			}
			
		</style>
		
		<!-- Modal -->
<div id="directories" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-body">
										
<div class="container">
  <form>

    <div class="contact_form">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
	</div>
	<div class="contact_info">
		<p id="titl">OUR MAIL</p>
		<ul>
			<li>ebmmaster@gmail.com</li>
			<li>ebmmaster@outlook.com</li>
			<li>ebmmaster@yahoo.fr</li>
		</ul>
		<p id="titl">OUR NUMBERS</p>
		<ul>
			<li>ebmmaster@gmail.com</li>
			<li>ebmmaster@outlook.com</li>
			<li>ebmmaster@yahoo.fr</li>
		</ul>
	</div>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true" onclick=" return alert('Your request has been sent with succes')"><i class="icon-remove"></i> Close</button>

</div>
</div>