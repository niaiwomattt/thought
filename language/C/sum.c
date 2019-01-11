#include <stdio.h>

int main(void) {

	long hight = 10 * 100 * 100; // 假设塔高150米 换算成 mm
    long page   = 1; // 纸的厚度
    long nsum  = 0; // 纸的最终厚度
    long num   = 0; // 执行次数 num -1，2 是平方的值
    while(1){
        if(page >= hight){
            break;
        }
        page = page * 2;
        printf("page=%d\n",page);
        num++;
    }
	printf(" %d step,page=%d\n",num,page);
	return 0;
}