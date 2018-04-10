<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}
	// public function SearchForm()
  //   {
  //       $fields = new FieldList(
  //           HeaderField::create('Header', 'Step 1. Basics'),
  //           OptionsetField::create('Type', '', [
  //               'foo' => 'Search Foo',
  //               'bar' => 'Search Bar',
  //               'baz' => 'Search Baz'
  //           ]),
	//
  //           CompositeField::create(
  //               HeaderField::create('Header2', 'Step 2. Advanced '),
  //               CheckboxSetField::create('Foo', 'Select Option', [
  //                   'qux' => 'Search Qux'
  //               ]),
	//
  //               CheckboxSetField::create('Category', 'Category', [
  //                   'Foo' => 'Foo',
  //                   'Bar' => 'Bar'
  //               ]),
	//
  //               NumericField::create('Minimum', 'Minimum'),
  //               NumericField::create('Maximum', 'Maximum')
  //           )
  //       );
	// 			$fields->push(  OptionsetField::create('Typezx', '', [
	// 						'foo' => 'Search Foo',
	// 						'bar' => 'Search Bar',
	// 						'baz' => 'Search Baz'
	// 				]));
	//
  //       $actions = new FieldList(
  //           FormAction::create('doSearchForm', 'Search')
  //       );
	//
  //       $required = new RequiredFields([
  //           'Type'
  //       ]);
	//
  //       $form = new Form($this, 'SearchForm', $fields, $actions, $required);
  //       $form->setFormMethod('GET');
	//
  //       $form->addExtraClass('no-action-styles');
  //       $form->disableSecurityToken();
  //       $form->loadDataFrom($_REQUEST);
	//
  //       return $form;
  //   }

}
