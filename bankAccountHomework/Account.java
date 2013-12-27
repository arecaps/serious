package bankaccount;

public abstract class Account {
    protected int balance;
    
    public void Account(){
    }
    
    public int getBalance(){
        return balance;
    }
    public void addTransaction(int amount){
        balance += amount;
    }
    public abstract void endOfMonth();
}

