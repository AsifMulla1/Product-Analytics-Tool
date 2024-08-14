<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "Login";
$route['404_override'] = 'error';


/*********** USER DEFINED ROUTES *******************/

$route['BrandCreate']='admin/Brand/create';
$route['BrandIndex']='admin/Brand/index';
$route['BrandEdit'.'/(:any)']='admin/Brand/create'."/$1";

$route['ContentCreate']='admin/Content/create';
$route['ContentIndex']='admin/Content/index';
$route['ContentEdit'.'/(:any)']='admin/Content/create'."/$1";


$route['ManufactureCreate']='admin/Manufacture/create';
$route['ManufactureIndex']='admin/Manufacture/index';
$route['ManufactureEdit'.'/(:any)']='admin/Manufacture/create'."/$1";

	
$route['GenericCreate']='admin/Generic/create';
$route['GenericIndex']='admin/Generic/index';
$route['GenericEdit'.'/(:any)']='admin/Generic/create'."/$1";	

$route['CategoryCreate']='admin/Category/create';
$route['CategoryIndex']='admin/Category/index';
$route['CategoryEdit'.'/(:any)']='admin/Category/create'."/$1";

$route['SubcategoryCreate']='admin/SubCategory/create';
$route['SubcategoryIndex']='admin/SubCategory/index';
$route['SubcategoryEdit'.'/(:any)']='admin/SubCategory/create'."/$1";

$route['ColorCreate']='admin/Color/create';
$route['ColorIndex']='admin/Color/index';
$route['ColorEdit'.'/(:any)']='admin/Color/create'."/$1";

$route['CompanyCreate']='admin/Company/create';
$route['CompanyIndex']='admin/Company/index';
$route['CompanyEdit'.'/(:any)']='admin/Company/create'."/$1";

$route['CountryCreate']='admin/Country/create';
$route['CountryIndex']='admin/Country/index';
$route['CountryEdit'.'/(:any)']='admin/Country/create'."/$1";

$route['CustomerCreate']='admin/Customer/create';
$route['CustomerIndex']='admin/Customer/index';
$route['CustomerEdit'.'/(:any)']='admin/Customer/edit'."/$1";


$route['DoctorCreate']='admin/Doctorprofile/create';
$route['DoctorIndex']='admin/Doctorprofile/index';
$route['DoctorEdit'.'/(:any)']='admin/Doctorprofile/edit'."/$1";

$route['DistrictCreate']='admin/District/create';
$route['DistrictIndex']='admin/District/index';
$route['DistrictEdit'.'/(:any)']='admin/District/create'."/$1";

$route['GstCreate']='admin/Gst/create';
$route['GstIndex']='admin/Gst/index';
$route['GstEdit'.'/(:any)']='admin/Gst/create'."/$1";

$route['HsnsacCreate']='admin/Hsnsac/create';
$route['HsnsacIndex']='admin/Hsnsac/index';
$route['HsnsacEdit'.'/(:any)']='admin/Hsnsac/create'."/$1";

$route['ProductmaingroupCreate']='admin/Productmaingroup/create';
$route['ProductmaingroupIndex']='admin/Productmaingroup/index';
$route['ProductmaingroupEdit'.'/(:any)']='admin/Productmaingroup/create'."/$1";

$route['ProductgroupCreate']='admin/Productgroup/create';
$route['ProductgroupIndex']='admin/Productgroup/index';
$route['ProductgroupEdit'.'/(:any)']='admin/Productgroup/create'."/$1";

$route['ProductsubgroupCreate']='admin/Productsubgroup/create';
$route['ProductsubgroupIndex']='admin/Productsubgroup/index';
$route['ProductsubgroupEdit'.'/(:any)']='admin/Productsubgroup/create'."/$1";

$route['ShapeCreate']='admin/Shape/create';
$route['ShapeIndex']='admin/Shape/index';
$route['ShapeEdit'.'/(:any)']='admin/Shape/create'."/$1";

$route['SizeCreate']='admin/Size/create';
$route['SizeIndex']='admin/Size/index';
$route['SizeEdit'.'/(:any)']='admin/Size/create'."/$1";

$route['StateCreate']='admin/State/create';
$route['StateIndex']='admin/State/index';
$route['StateEdit'.'/(:any)']='admin/State/create'."/$1";

$route['SupplierCreate']='admin/Supplier/create';
$route['SupplierIndex']='admin/Supplier/index';
$route['SupplierEdit'.'/(:any)']='admin/Supplier/edit'."/$1";

$route['TalukaCreate']='admin/Taluka/create';
$route['TalukaIndex']='admin/Taluka/index';
$route['TalukaEdit'.'/(:any)']='admin/Taluka/create'."/$1";

$route['UnitCreate']='admin/Unit/create';
$route['UnitIndex']='admin/Unit/index';
$route['UnitEdit'.'/(:any)']='admin/Unit/create'."/$1";

$route['VillageCreate']='admin/Village/create';
$route['VillageIndex']='admin/Village/index';
$route['VillageEdit'.'/(:any)']='admin/Village/create'."/$1";

$route['WarehouseCreate']='admin/Warehouse/create';
$route['WarehouseIndex']='admin/Warehouse/index';
$route['WarehouseEdit'.'/(:any)']='admin/Warehouse/create'."/$1";


$route['ProductCreate']='admin/Product/create';
$route['ProductIndex']='admin/Product/index';
$route['ProductEdit'.'/(:any)']='admin/Product/edit'."/$1";

$route['CustomertransactionCreate']='admin/Customertransaction/create';
$route['CustomertransactionIndex']='admin/Customertransaction/index';
$route['CustomertransactionEdit'.'/(:any)']='admin/Customertransaction/create'."/$1";

$route['SuppliertransactionCreate']='admin/Suppliertransaction/create';
$route['SuppliertransactionIndex']='admin/Suppliertransaction/index';
$route['SuppliertransactionEdit'.'/(:any)']='admin/Suppliertransaction/create'."/$1";

$route['EmployeeCreate']='admin/Employee/create';
$route['EmployeeIndex']='admin/Employee/index';
$route['EmployeeEdit'.'/(:any)']='admin/Employee/edit'."/$1";

$route['UsertypeCreate']='admin/Usertype/create';
$route['UsertypeIndex']='admin/Usertype/index';
$route['UsertypeEdit'.'/(:any)']='admin/Usertype/create'."/$1";

$route['UseraccessCreate']='admin/Useraccess/create';
$route['UseraccessIndex']='admin/Useraccess/index';
$route['UseraccessEdit'.'/(:any)']='admin/Useraccess/create'."/$1";

$route['UserregistrationCreate']='admin/Userregistration/create';
$route['UserregistrationIndex']='admin/Userregistration/index';
$route['UserregistrationEdit'.'/(:any)']='admin/Userregistration/create'."/$1";


$route['InvoiceCreate']='admin/Invoice/create';
$route['InvoiceIndex']='admin/Invoice/index';
$route['InvoiceEdit'.'/(:any)']='admin/Invoice/edit'."/$1";

$route['PurchasebillCreate']='admin/Purchasebill/create';
$route['PurchasebillIndex']='admin/Purchasebill/index';
$route['PurchasebillEdit'.'/(:any)']='admin/Purchasebill/edit'."/$1";


$route['PurchaseorderCreate']='admin/Purchaseorder/create';
$route['PurchaseorderIndex']='admin/Purchaseorder/index';
$route['PurchaseorderEdit'.'/(:any)']='admin/Purchaseorder/edit'."/$1";

$route['SalesreturnCreate']='admin/Salesreturn/create';
$route['SalesreturnIndex']='admin/Salesreturn/index';
$route['SalesreturnEdit'.'/(:any)']='admin/Salesreturn/edit'."/$1";

$route['Companyinfo']='admin/Companyinfo/index';
$route['supplierPayment']='admin/Supplierpayment/create';

$route['CustomerPayment']='admin/Customerpayment/create';

$route['Purchasesummary']='admin/Purchasesummary/index';

$route['BatchRemaining']='admin/BatchRemaining/index';

$route['BatchExpiry']='admin/BatchExpiry/index';

$route['Salesummary']='admin/Salesummary/index';

$route['Productsummary']='admin/Productsummary/index';

$route['WhatsappIntegration']='admin/WhatsappIntegration/index';

$route['Whatsappreport'.'/(:any)']='admin/Whatsappreport/index'."/$1";

$route['Whatsappsupplierreport'.'/(:any)']='admin/Whatsappreport/supplier'."/$1";
$route['Customertransreport'.'/(:any)']='admin/Whatsappreport/customertrans'."/$1";

$route['Suppliertransreport'.'/(:any)']='admin/Whatsappreport/suppliertrans'."/$1";
$route['Contentsearch']='admin/Contentsearch/index';

$route['Productsearch']='admin/Productsearch/index';

// $route['Backup']='admin/Backup/index';
/* End of file routes.php */
/* Location: ./application/config/routes.php */