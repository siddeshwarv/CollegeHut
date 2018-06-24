#include<iostream.h>

using namespace std;

int main(){

	long long n;
	cin>>n;


	long long x,long long y;
	int count1 = 0;
	int count2 = 0;
	int count3 = 0;
	int count4 = 0;
	for (int i = 0; i < n; ++i)
	{
		cin>>x>>y;
		if(x>0)
			count1 = count1 + 1;
		else{
			count2 = count2 + 1;
		}			
	}
	if((count1<=1 && count2>0) || (count2<=1 && count1>0))
		printf("YES");
	else
		printf("NO");

	return 0;	
}