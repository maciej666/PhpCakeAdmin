 <?php
        echo $this->Form->create('Invoice');
        echo $this->Form->input('email');
        echo $this->Form->input('invoice_nr');
        echo $this->Form->input('invoice_amount');
        echo $this->Form->input('company_name');
        echo $this->Form->input('company_address');
        echo $this->Form->end('Save invoice');

