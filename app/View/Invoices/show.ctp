
            <script>
                $(document).ready(function(){
                    $('#myTable').DataTable( {
                        "ajax": '/files/invoices.json',
                        "columns" : [
                            {"data" : "id"},
                            {"data" : "invoice_nr"},
                            {"data" : "issue_date"},
                            {"data" : "invoice_amount"},
                            {"data" : "company_name"},
                            {"data" : "company_address"},
                            {"data" : "email"}
                        ]
                        } );
                });
            </script>
            <table id="myTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Invoice nr.</th>
                    <th>Issue date</th>
                    <th>Invoice amount</th>
                    <th>Company name</th>
                    <th>Company address</th>
                    <th>Email</th>
                </tr>
                </thead>
<!--                <tbody>-->
<!--                    --><?php //foreach($invoices as $invoice) : ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['id']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['invoice_nr']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['issue_date']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['invoice_amount']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['company_name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['company_address']; ?><!--</td>-->
<!--                    <td>--><?php //echo $invoice['Invoice']['email']; ?><!--</td>-->
<!--                </tr>-->
<!--                    --><?php //endforeach; ?>
<!--                    --><?php //unset($invoice); ?>
<!--                </tbody>-->
            </table>
