#include <stdlib.h>
#include <iostream>
#define n 5 								//no of random items
using namespace std;
bool randIsUnique(int j, int a[],int k){

	bool res = true;
	for(int i = 0; i < k; ++i)
		if(a[i] == j)
			return false;
	return res;
}
int main()
{
	//random test case generator
	time_t waqt;	
	int a[n] = {0};
	srand((unsigned) time(&waqt));
 	cout<<endl;
	for (int i = 0; i < n; ++i)
	{
		int j = rand()%n+1;
		while(!randIsUnique(j,a,i))			//comment these 2 lines..
			j = rand()%n+1;					//to remove unique filter
		a[i] = j;
		cout<<j<<" ";
	}
	cout<<endl<<endl;
	return 0;
}
