import java.util.scanner;
class Amountinwords
{
	public static void main (String args[])
	Scanner sc= new Scanner(System.in)
	System.out.println("Enter a number: ");
	int n= sc.nextInt ();
	 
	String[] ones = { 
						"", "one", "two", "three", "four", 
						"five", "six", "seven", "eight", 
						"nine", "ten", "eleven", "twelve", 
						"thirteen", "fourteen", "fifteen", 
						"sixteen", "seventeen", "eighteen", 
						"nineteen"};
    String[] tens = {
						"",          
						"",          
						"twenty",    
						"thirty",    
						"forty",     
						"fifty",     
						"sixty",     
						"seventy",   
						"eighty",    
						"ninety"     
		};
		String str;
		int k=n;
		if(n/100!=0)
		{
			str=ones[n/100]+" hundred ";
			n=n%100;
			if(n==0)
			{
				System.out.println(str+" ");
			}
			else if(n<20)
			{
				System.out.println(str+" "+ones[n]);
			}
			else if(n<100)
			{
				System.out.println(str+" "+tens[n/10]+" "+ones[n%10]);
			}
		}
		else
		{
			if(n==0)
			{
				System.out.println("Zero");
			}
			else if(n<20)
			{
				System.out.println(ones[n]);
			}
			else if(k<100)
			{
				System.out.println(tens[n/10]+" "+ones[n%10]);
			}
		}
		
	}
}
		
		