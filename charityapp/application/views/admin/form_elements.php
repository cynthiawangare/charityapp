
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Form Elements</li>
        </ol>
        <h1 class="page-title">Form - <span class="fw-semi-bold">Inputs & Controls</span></h1>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Inputs
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form class="form-horizontal" role="form">
                            <fieldset>
                                <legend><strong>Horizontal</strong> form</legend>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Normal field</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="normal-field" class="form-control" placeholder="May have placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Label hint
                                        <span class="help-block">Some help text</span>
                                    </label>
                                    <div class="col-sm-7">
                                        <input type="text" id="hint-field" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tooltip-enabled">Tooltip enabled</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="tooltip-enabled" class="form-control"
                                               data-placement="top" data-original-title="Some explanation text here"
                                               placeholder="Hover over me..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="disabled-input">Disabled input</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="disabled-input" class="form-control"
                                               disabled="disabled" value="Default value" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="max-length">Max length</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="max-length" maxlength="3"
                                               class="form-control"
                                               placeholder="Max length 3 characters"
                                               data-placement="top" data-original-title="You cannot write more than 3 characters.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="prepended-input">Prepended input</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input id="prepended-input" class="form-control" size="16" type="text" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="password-field">Password</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" id="password-field" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="appended-input">Appended input</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input id="appended-input" class="form-control" size="16" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="combined-input">Combined</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input id="combined-input" class="form-control" size="16" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="transparent-input">
                                        Append Transparent
                                    </label>
                                    <div class="col-sm-7">
                                        <div class="input-group input-group-transparent">
                                            <input id="transparent-input" class="form-control" type="text">
                                            <span class="input-group-addon">
                                                <i class="fa fa-camera"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-7">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Prepended and appended inputs
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <fieldset>
                                <legend><strong>Default</strong> Form</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="search-input">Search type input</label>
                                            <div class="input-group">
                                                <input type="search" class="form-control" id="search-input">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default">Search</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bar">Whole bar appended</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="bar">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-warning"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-success"><i class="fa fa-refresh"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dropdown-appended">Actions dropdown</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="dropdown-appended">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                        <i class="fa fa-caret-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="type-dropdown-appended">Types dropdown</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control" id="type-dropdown-appended">
                                                <div class="input-group-btn">
                                                    <select id="phone-type" class="selectpicker"
                                                            data-style="btn-primary"
                                                            data-width="auto">
                                                        <option>Another type</option>
                                                        <option>Type one</option>
                                                        <option>Next type</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <p class="help-block">You can select some type of a field just right in the place.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="segmented-dropdown">Segmented dropdown</label>
                                            <div class="input-group">
                                                <input id="segmented-dropdown" class="form-control" type="text">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-warning" tabindex="-1">Action</button>
                                                    <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="help-block">Anything can be appended to the right</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="no-borders-input">Transparent input</label>
                                            <input id="no-borders-input" class="form-control input-no-border bg-gray-lighter" type="text"
                                                    placeholder="Search Dashboard">
                                            <p class="help-block">With <code>.bg-gray-lighter</code>. White by default.</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-inverse">Save Changes</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <section class="widget">
                    <header>
                        <h5>
                            Form <span class="fw-semi-bold">Options</span>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <fieldset>
                                <legend>
                                    Control sizing
                                </legend>
                                <p>
                                    Set input heights using classes like <code>.input-lg</code> and <code>.input-sm</code>.
                                    Also works with <code>type="search"</code> inputs and selects. For input groups use
                                    <code>.input-group-lg</code> & <code>.input-group-sm</code>.
                                </p>
                                <br/>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder=".input-lg">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="default input">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-sm" placeholder=".input-sm">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget">
                    <header>
                        <h5>
                            Form <span class="fw-semi-bold">Options</span>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <fieldset>
                                <legend>
                                    Input Groups
                                </legend>
                                <p>
                                    Different colors & sizes for any elements including input groups. Elements may be
                                    easily styled with classes like <code>.bg-primary</code> or <code>.bg-transparent</code>
                                </p>
                                <br/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon bg-transparent"><i class="fa fa-github-alt"></i></span>
                                        <input class="form-control" size="16" type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                        <input class="form-control" size="16" type="text" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" size="16" type="text" placeholder="City">
                                        <span class="input-group-addon bg-danger text-white"><i class="fa fa-code-fork"></i></span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            <i class="fa fa-font"></i>
                            Textareas
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form class="form-horizontal" role="form">
                            <fieldset>
                                <legend>Small form</legend>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="default-textarea">Default textarea</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="form-control" id="default-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="elastic-textarea">
                                        Auto-growing textarea
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea rows="3" class="autogrow form-control transition-height" id="elastic-textarea"
                                                  placeholder="Try to add few new lines.."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="wysiwyg">
                                        Wysiwyg
                                        <span class="help-block">
                                            With bottom toolbar appended
                                        </span>
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="form-control" id="wysiwyg"></textarea>
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-sm btn-default pull-right">Clear</button>
                                            <button type="button" class="btn btn-sm btn-danger pull-right">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="markdown">
                                        Markdown Editor
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="markdown" data-provide="markdown" rows="6">### Hello there
How are you?

I have bellow task for you :

Select from this text...
Click the bold on THIS WORD and make THESE ONE italic
Link GOOGLE to google.com
Test to insert image (and try to tab after write the image description)
Test Preview
And ending here... Click "List"

Enjoy!
                                        </textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            <i class="fa fa-list-alt"></i>
                            Selects
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form class="form-horizontal form-label-left" role="form">
                            <fieldset>
                                <legend>Default form with labels on left</legend>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="default-select">Default select</label>
                                    <div class="col-sm-8">
                                        <select data-placeholder="Which galaxy is closest to Milky Way?"
                                                data-width="auto"
                                                data-minimum-results-for-search="10"
                                                tabindex="-1"
                                                class="select2 form-control" id="default-select">
                                            <option value=""></option>
                                            <option value="Magellanic">Large Magellanic Cloud</option>
                                            <option value="Andromeda">Andromeda Galaxy</option>
                                            <option value="Sextans">Sextans A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="country-select">Select with search</label>
                                    <div class="col-sm-8">
                                        <select id="country-select"
                                                data-placeholder="Select country"
                                                class="select2 form-control"
                                                tabindex="-1"
                                                name="country">
                                            <option value=""></option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="multiple-select">
                                        Multiple select
                                        <span class="help-block">Search enabled</span>
                                    </label>
                                    <div class="col-sm-8">
                                        <select multiple
                                                data-placeholder="Multiple countries this time"
                                                data-minimum-results-for-search="10"
                                                tabindex="-1"
                                                class="select2 form-control" id="multiple-select">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option selected="selected" value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="grouped-select">Select with groups</label>
                                    <div class="col-sm-8">
                                        <select data-placeholder="Your Favorite Football Team"
                                                multiple
                                                tabindex="-1"
                                                data-minimum-results-for-search="10"
                                                class="select2 form-control" id="grouped-select">
                                            <option value=""></option>
                                            <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                            </optgroup>
                                            <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                            </optgroup>
                                            <optgroup label="NFC SOUTH">
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                            </optgroup>
                                            <optgroup label="NFC WEST">
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                            </optgroup>
                                            <optgroup label="AFC EAST">
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                            </optgroup>
                                            <optgroup label="AFC NORTH">
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                            </optgroup>
                                            <optgroup label="AFC SOUTH">
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                            </optgroup>
                                            <optgroup label="AFC WEST">
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Dropdown based colored selects</legend>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="simple-select">Simple select</label>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" data-style="btn-default"
                                                data-width="auto"
                                                tabindex="-1" id="simple-select">
                                            <option value="0">Option One</option>
                                            <option value="1">Option Two</option>
                                            <option value="2">Option Three</option>
                                        </select>
                                        <span class="help-block">Auto size</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="simple-red-select">
                                        Colored ones
                                        <span class="help-block">
                                            A bit of Japanese
                                        </span>
                                    </label>
                                    <div class="col-sm-8">
                                        <select class="selectpicker"
                                                data-style="btn-danger btn-sm"
                                                data-width="auto"
                                                tabindex="-1" id="simple-red-select">
                                            <option value="0">Ichi</option>
                                            <option value="1">Ni</option>
                                            <option value="2">San</option>
                                        </select>
                                        <select class="selectpicker"
                                                data-style="btn-warning btn-sm"
                                                data-width="auto"
                                                tabindex="-1" id="simple-orange-select">
                                            <option value="0">Shi</option>
                                            <option value="1">Go</option>
                                            <option value="2">Roku</option>
                                        </select>
                                        <select class="selectpicker"
                                                data-style="btn-success btn-sm"
                                                data-width="auto"
                                                tabindex="-1" id="simple-green-select">
                                            <option value="0">Hichi</option>
                                            <option value="1">Hachi</option>
                                            <option value="2">Ku</option>
                                            <option value="3">Ju</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="simple-big-select">
                                        Big One
                                        <span class="help-block">
                                            Size can be controlled with <code>.btn-lg</code> & <code>.btn-sm</code>
                                        </span>
                                    </label>
                                    <div class="col-sm-8">
                                        <select class="selectpicker"
                                                data-style="btn-default btn-lg"
                                                tabindex="-1" id="simple-big-select">
                                            <option value="0">Fourth Item</option>
                                            <option value="1">Fifth Item</option>
                                            <option value="2">Sixth item</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h5>
                            Checkbox <strong>Controls</strong>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Basic
                                        </legend>
                                        <p>
                                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                            Pure <abbr title="Cascading Style Sheet">css</abbr> solution with no javascript.
                                            Let your checkboxes shine!
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6">
                                                Check me out
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Circled
                                        </legend>
                                        <p>
                                            <code>.checkbox-circle</code> for roundness. No more sad controls controls.
                                            Check out this brand-new rounded checkboxes!
                                        </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Simply Rounded
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8">
                                                Me too
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Disabled
                                        </legend>
                                        <p>
                                            Disabled state also supported. Full stack checkbox functionality.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox9" type="checkbox" disabled>
                                            <label for="checkbox9">
                                                Can't check this
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox10" type="checkbox" disabled checked>
                                            <label for="checkbox10">
                                                This too
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning checkbox-circle">
                                            <input id="checkbox11" type="checkbox" disabled checked>
                                            <label for="checkbox11">
                                                And this
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <p class="fs-mini">Built with <a href="https://github.com/okendoken/awesome-bootstrap-checkbox" target="_blank">awesome-bootstrap-checkbox</a>.</p>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h5>
                            Radio <strong>Controls</strong>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Basic
                                        </legend>
                                        <p>
                                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                            Pure css solution with no javascript. Let your radios shine!
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked>
                                                    <label for="radio1">
                                                        Small
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Big
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                    <label for="radio3">
                                                        Next
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked>
                                                    <label for="radio4">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Disabled
                                        </legend>
                                        <p>
                                            Disabled state also supported. Full stack radios functionality.
                                        </p>
                                        <div class="radio">
                                            <input type="radio" name="radio3" id="radio5" value="option1" disabled>
                                            <label for="radio5">
                                                Next
                                            </label>
                                        </div>
                                        <div class="radio radio-warning">
                                            <input type="radio" name="radio3" id="radio6" value="option2" checked disabled>
                                            <label for="radio6">
                                                One
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <legend>
                                            Cool iOS-like switches
                                        </legend>
                                        <p>
                                            Simple component that helps you turn your default HTML checkbox inputs into
                                            beautiful iOS 7 style switches in just few simple steps.
                                        </p>
                                        <div class="checkbox-inline checkbox-ios">
                                            <label for="checkbox-ios1">
                                                <input type="checkbox" id="checkbox-ios1" checked>
                                            </label>
                                        </div>
                                        <div class="checkbox-inline checkbox-ios">
                                            <label for="checkbox-ios2">
                                                <input type="checkbox" id="checkbox-ios2">
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Pickers
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form">
                            <fieldset>
                                <legend>
                                    Date & Time
                                </legend>
                                <div class="form-group">
                                    <label for="datetimepicker1">In place</label>
                                    <input id="datetimepicker1" type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="datepicker2i">
                                        Time-enabled
                                        <span class="help-block">
                                            Can be customized for both 24 hour and 12 hour clocks.
                                        </span>
                                    </label>
                                    <div id="datetimepicker2" class="input-group">
                                        <input id="datepicker2i" type="text" class="form-control" />
                                        <span class="input-group-btn">
                                            <a href="#" class="btn btn-success">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    Colors
                                </legend>
                                <div class="form-group">
                                    <label for="colorpickeri">
                                        Simple select
                                        <span class="help-block">
                                            Colorpicker plugin for Twitter Bootstrap, originally written by Stefan Petre
                                        </span>
                                    </label>
                                    <div id="colorpicker" class="input-group">
                                        <input type="text" value="" class="form-control" id="colorpickeri"/>
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Input <strong>Masks</strong>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form role="form" class="form-horizontal form-label-left">
                            <fieldset>
                                <legend>
                                    Masked inputs
                                </legend>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="mask-phone">
                                        Phone
                                        <span class="help-block">(123) 456-7890</span>
                                    </label>
                                    <div class="col-sm-7">
                                        <input id="mask-phone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="mask-int-phone">
                                        International Phone
                                        <span class="help-block">+375 123 456 789</span>
                                    </label>
                                    <div class="col-sm-7">
                                        <input id="mask-int-phone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="mask-date">
                                        Date Format
                                        <span class="help-block">07-03-2013</span>
                                    </label>
                                    <div class="col-sm-7">
                                        <input id="mask-date" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="mask-time">
                                        Time
                                        <span class="help-block">13:43</span>
                                    </label>
                                    <div class="col-sm-7">
                                        <input id="mask-time" type="text" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h5>
                            Sliders
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Color Options</h4>
                                <p>Sing extends Bootstrap Slider and provides different color options:</p>
                                <form>
                                    <div class="mb-sm">
                                        <input class="js-slider" id="slider-ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                    </div>
                                    <div class="slider-danger mb-sm">
                                        <input class="js-slider" id="slider-ex2" data-slider-id='ex2Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="18"/>
                                    </div>
                                    <div class="slider-warning mb-sm">
                                        <input class="js-slider" id="slider-ex3" data-slider-id='ex3Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="7"/>
                                    </div>
                                    <div class="slider-success mb-sm">
                                        <input class="js-slider" id="slider-ex4" data-slider-id='ex4Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="11"/>
                                    </div>
                                    <div class="slider-inverse mb-sm">
                                        <input class="js-slider" id="slider-ex5" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <h4>Slider Orientation</h4>
                                <p>Vertical orientation is also possible. Simply changing <strong>data-slider-orientation</strong>
                                    attribute does the thing.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                        <span class="">
                                    <input class="js-slider" id="slider-ex6" data-slider-orientation="vertical" data-slider-id='ex6Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                </span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="slider-inverse">
                                    <input class="js-slider" id="slider-ex7" data-slider-orientation="vertical" data-slider-id='ex7Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="18"/>
                                </span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="">
                                    <input class="js-slider" id="slider-ex8" data-slider-orientation="vertical" data-slider-id='ex8Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="7"/>
                                </span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="slider-inverse">
                                    <input class="js-slider" id="slider-ex9" data-slider-orientation="vertical" data-slider-id='ex9Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="11"/>
                                </span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="">
                                    <input class="js-slider" id="slider-ex10" data-slider-orientation="vertical" data-slider-id='ex10Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4"/>
                                </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <h4>Range Selector</h4>
                                <p>Range selector, options specified via <strong>data-slider-value</strong> attribute as
                                    an array. Price range selector:</p>
                                <form>
                                <span class="slider-warning">
                                    <input class="js-slider" id="slider-ex11" data-slider-id='ex11Slider'
                                           type="text" data-slider-min="0" data-slider-max="2000"
                                           data-slider-step="1" data-slider-value="[200,1547]"/>
                                </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Simple <strong>file uploads</strong>
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form class="form-horizontal" role="form">
                            <fieldset>
                                <blockquote class="blockquote-reverse">
                                    <p>The man who is really serious, with the urge to find out what truth is, has no style at all. He lives only in what is.</p>
                                    <footer>Bruce Lee</footer>
                                </blockquote>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="fileupload1">
                                        File input widget
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input id="fileupload1" type="file">
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <span class="help-block">Awesome file input plugin allows you to create a visually appealing file or image inputs.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="fileupload1">
                                        Image upload widget
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img data-src="holder.js/100%x100%" alt="..." src="">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                        <span class="help-block">Showing a thumbnail instead of the filename when uploading an image.</span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            <strong>Drop</strong> Zone
                        </h5>
                        <div class="widget-controls">
                            <a class="bg-gray-transparent" href="#"><i class="glyphicon glyphicon-cog text-white"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form class="dropzone" action="#" id="my-awesome-dropzone"></form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>


