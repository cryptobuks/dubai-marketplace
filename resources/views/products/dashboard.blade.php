@extends($layout)
 @section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-cc"></i> {{isset($title) ? $title : ''}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_PRODUCTS}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-3">
                        <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-list fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-9">
                        <div class="card-body p-4">
                         
                               
                              <h2 class="mb-3">{{ getPhrase('list')}}</h2>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('view_all')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_PRODUCTS_ADD}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-danger text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-plus-circle fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                       
                              
                                <h2 class="mb-3"> {{ getPhrase('create')}}</h2>
                            <h5 class="font-weight-normal mb-0"> {{ getPhrase('view_all')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_IMPORT.'product'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-download fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                     
                               
                              <h2 class="mb-3">{{ getPhrase('import')}}</h2>
                            <h4 class="font-weight-normal mb-0"> {{ getPhrase('view_all')}}</h4> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
         
            
    </div>   
</div>
@stop


 