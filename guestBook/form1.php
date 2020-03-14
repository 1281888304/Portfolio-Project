<form id="guestForm" action="confirm.php" method="post">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <div class="title">
                <h2><a href="#">Contract me</a></h2>
                <p><small>Posted on January 29 2020, by <a href="#">QINGHANG ZHANG</a></small></p>
            </div>
            <fieldset class="form-group">

                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
                    <span class="err" id="errF">Field is required </span>

                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
                    <span class="err" id="errL">Field is required </span>

                </div>
                <div class="form-group">
                    <label for="job">Job Title</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="Enter your your job">

                </div>
                <div class="form-group">
                    <label for="company">Company name</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter your your company">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" name="email"

                           placeholder="You@example.com">

                    <span class="err" id="errMail">Field is require </span>
                    <span class="err" id="errMail2">email contains @ and dot "." </span>

                </div>
                <div class="form-group">
                    <label for="link">LinkedIn</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter your your LinkedIn">
                    <span class="err" id="errLink">Must be valid url</span>
                </div>

            </fieldset>



        </div>
        <div class="post">
            <div class="title">
                <h2><a href="#">GuestBook</a></h2>
                <p><small>Posted on January 29th, 2020 by <a href="#">QINGHANG ZHANG</a></small></p>
            </div>
            <div class="entry">
                <h3>How we meet:</h3>
                <blockquote>
                    <fieldset class="form-group">


                        <label for="meet">Meeting Way</label>
                        <p></p>
                        <select class="form-control" id="meet" name="meet">
                            <option value="none">Select a Way</option>
                            <option value="meetUp">Meet Up</option>
                            <option value="jobFair">Job Fair</option>
                            <option value="No">No meet</option>
                            <option value="Other">Other</option>


                        </select>
                        <span class="err" id="errSelect">Field is required </span>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                        <div class="form-group" id="otherShow">
                            <label for="other">Ohter(Please specity)</label>
                            <input type="text" class="form-control" id="other" name="other">
                            <span class="err" id="errOther">Field is required </span>

                        </div>
                    </fieldset>
                </blockquote>
                <fieldset ="question">
                    <legend>mailing List:</legend>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms">
                        <label class="form-check-label" for="terms">Please add your mailing list</label>
                        <span class="err" id="errCheck">Field is required </span>

                    </div>
                </fieldset>
                <a href="ViewGuest.php">View Guest</a>

                <fieldset id="answer" class="form-group">
                    <legend>Please choose email format</legend>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="method" id="html" value="html"
                        >
                        <label class="form-check-label" for="html">
                            html
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="method" id="text" value="text">
                        <label class="form-check-label" for="text">
                            Text
                        </label>
                    </div>
                    <span class="err" id="errFormat">Field is required </span>


                </fieldset>
                <button id="b1" type="submit" class="btn btn-primary">submit</button>

            </div>

        </div>

    </div>
</form>
