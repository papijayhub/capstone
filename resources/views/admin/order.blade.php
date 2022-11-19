<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
        @include('admin.css')

        <style type="text/css">

            .title_des
            {
                text-align: center;
                font-size: 25px;
                font-weight: bold;
                padding-bottom:40px;
            }
            .table_des
            {
                border: 2px solid white;
                width: 100%;
                margin: auto;
                text-align: center;
            }
            .th_des
            {
                background-color: skyblue;
            }
            .img_size
            {
                width: 200px;
                height: 110px;
            }

        </style>

  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
    <!-- partial -->
        @include('admin.header')
    <!-- partial -->
    <!-- container-scroller -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h1 class="title_des">All Orders</h1>

            <div class="form-search">

                <form action="{{url('/user/search')}}" method="get" >

                    <div class="form-group" >

                        <input type="text" name="search_name" class="text-dark" placeholder="Search here...">

                        <button type="submit" class="btn btn-primary">Search</button>

                    </div>

                </form>

            </div>

            <div class="d-flex justify-content-center">
                <table class="table_des">

                    <tr class="th_des">

                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Address</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Product title</th>
                        <th style="padding: 10px;">Quantity</th>
                        <th style="padding: 10px;">Price</th>
                        <th style="padding: 10px;">Payment Status</th>
                        <th style="padding: 10px;">Delivery Status</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delivered</th>
                        <th style="padding: 10px;">Print PDF</th>
                        <th style="padding: 10px;">Send Email</th>

                    </tr>

                    @forelse($order as $order)

                        <tr>

                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product_title}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->delivery_status}}</td>
                            <td>

                                <img class="img_size" src="/product/{{$order->image}}" alt="">

                            </td>

                            <td>

                                @if($order->delivery_status=='processing')

                                <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>

                                @else

                                <p style="color: green;">Delivered</p>

                                @endif

                            </td>

                            <td><a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a></td>

                            <td><a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a></td>

                        </tr>

                        @empty
                        <tr>
                            <td colspan="16">
                                No Data Found
                            </td>
                        </tr>

                    @endforelse

                </table>
            </div>

        </div>
    </div>
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>