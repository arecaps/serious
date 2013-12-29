
package bankaccount;

public class checkingAccount extends Account{
    private String acctTypeNo; 
   
    @Override
    public void endOfMonth(){
        int fee = -10;
        if(balance < 1000)
            balance += fee;
    }
    @Override
    public String getAccountNum(){
        acctTypeNo = "Checking Acct no. " + super.getAccountNum();
        return acctTypeNo;
    }
}

